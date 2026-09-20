<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class RajaOngkirService
{
    protected $baseUrl;
    protected $apiKey;
    protected $cityCache;

    // Fallback prices only. When the API is available, its courier tariff wins.
    protected $pricingByTier = [
        0 => 12000,
        1 => 18000,
        2 => 25000,
    ];

    public function __construct()
    {
        $this->baseUrl = env('RAJAONGKIR_BASE_URL', 'https://api.rajaongkir.com/starter');
        $this->apiKey = env('RAJAONGKIR_API_KEY');
    }

    protected function headers()
    {
        return [
            'key' => $this->apiKey,
            'Accept' => 'application/json',
        ];
    }

    protected function client()
    {
        return Http::withHeaders($this->headers())->connectTimeout(3)->timeout(5);
    }

    public function provinces()
    {
        try {
            $res = $this->client()->get($this->baseUrl . '/province');
            return $res->successful() ? $res->json() : null;
        } catch (\Throwable $e) {
            \Log::warning('RajaOngkir provinces request failed: ' . $e->getMessage());
            return null;
        }
    }

    public function cities($provinceId = null)
    {
        // If API key is not configured, avoid remote call and return null quickly.
        if (!$this->apiKey) {
            return null;
        }

        $cacheKey = 'rajaongkir:cities:' . ($provinceId ?: 'all');

        try {
            return Cache::remember($cacheKey, now()->addDay(), function () use ($provinceId) {
                $url = $this->baseUrl . '/city';
                $query = [];
                if ($provinceId) {
                    $query['province'] = $provinceId;
                }
                $res = $this->client()->get($url, $query);
                return $res->successful() ? $res->json() : null;
            });
        } catch (\Throwable $e) {
            \Log::warning('RajaOngkir cities request failed: ' . $e->getMessage());
            return null;
        }
    }

    public function cost($originCityId, $destinationCityId, $weightGrams = 1000, $courier = 'jne')
    {
        // If API key is missing, do not attempt remote cost calculation.
        if (!$this->apiKey) {
            return null;
        }

        $cacheKey = implode(':', [
            'rajaongkir',
            'cost',
            $originCityId,
            $destinationCityId,
            (int) $weightGrams,
            strtolower((string) $courier),
        ]);

        try {
            return Cache::remember($cacheKey, now()->addMinutes(15), function () use ($originCityId, $destinationCityId, $weightGrams, $courier) {
                $res = $this->client()->post($this->baseUrl . '/cost', [
                    'origin' => $originCityId,
                    'destination' => $destinationCityId,
                    'weight' => (int) $weightGrams,
                    'courier' => $courier,
                ]);

                return $res->successful() ? $res->json() : null;
            });
        } catch (\Throwable $e) {
            \Log::warning('RajaOngkir cost request failed: ' . $e->getMessage());
            return null;
        }
    }

    public function findCityIdFromAddress(string $address): ?int
    {
        $normalizedAddress = strtolower(trim($address));
        if ($normalizedAddress === '') {
            return null;
        }
        if ($this->apiKey) {
            if ($this->cityCache === null) {
                $response = $this->cities();
                $this->cityCache = $response['rajaongkir']['results'] ?? [];
            }

            $bestMatch = null;
            $bestScore = -1;

            foreach ($this->cityCache as $city) {
                $cityName = strtolower(trim($city['city_name'] ?? ''));
                $cityType = strtolower(trim($city['type'] ?? ''));
                $fullName = trim($cityType . ' ' . $cityName);
                if ($fullName === '' || $cityName === '') {
                    continue;
                }

                $score = 0;
                if (preg_match('/(^|[\s,.-])' . preg_quote($fullName, '/') . '([\s,.-]|$)/', $normalizedAddress)) {
                    $score = 10000 + strlen($fullName);
                } elseif (preg_match('/(^|[\s,.-])' . preg_quote($cityName, '/') . '([\s,.-]|$)/', $normalizedAddress)) {
                    $score = 1000 + strlen($cityName);
                }

                if ($score > $bestScore) {
                    $bestScore = $score;
                    $bestMatch = $city;
                }
            }

            if ($bestMatch && $bestScore > 0) {
                return (int) ($bestMatch['city_id'] ?? 0) ?: null;
            }
        }

        return $this->findCityIdFromAddressLocal($normalizedAddress);
    }

    public function packageWeightGrams(int $default = 1000): int
    {
        return max(1, (int) env('RAJAONGKIR_PACKAGE_WEIGHT_GRAMS', $default));
    }

    public function couriers(): array
    {
        $configuredCouriers = env('RAJAONGKIR_COURIERS', env('RAJAONGKIR_COURIER', 'jne'));

        return array_values(array_filter(array_map(
            static fn ($courier) => strtolower(trim($courier)),
            explode(',', (string) $configuredCouriers)
        )));
    }

    public function cheapestCost($originCityId, $destinationCityId, int $weightGrams): ?array
    {
        if (!$this->apiKey || !$originCityId || !$destinationCityId) {
            return null;
        }

        $options = [];
        foreach ($this->couriers() as $courier) {
            $response = $this->cost($originCityId, $destinationCityId, $weightGrams, $courier);
            foreach (($response['rajaongkir']['results'] ?? []) as $result) {
                foreach (($result['costs'] ?? []) as $service) {
                    $value = $service['cost'][0]['value'] ?? null;
                    if (!is_numeric($value)) {
                        continue;
                    }

                    $options[] = [
                        'ongkir' => (int) $value,
                        'courier' => $result['code'] ?? $courier,
                        'courier_name' => $result['name'] ?? strtoupper($courier),
                        'service' => $service['service'] ?? null,
                        'description' => $service['description'] ?? null,
                    ];
                }
            }
        }

        if (!$options) {
            return null;
        }

        usort($options, static fn ($left, $right) => $left['ongkir'] <=> $right['ongkir']);
        return $options[0] + ['options' => $options];
    }

    public function findCityIdFromAddressLocal(string $address): ?int
    {
        $map = [
            'kota sukabumi' => 3307,
            'sukabumi' => 3307,
            'cianjur' => 105,
            'kota jakarta timur' => 154,
            'jakarta timur' => 154,
            'jakarta' => 154,
            'kota bandung' => 104,
            'bandung' => 104,
            'kota bogor' => 301,
            'bogor' => 301,
        ];

        foreach ($map as $key => $value) {
            if (strpos($address, $key) !== false) {
                return $value;
            }
        }

        return null;
    }

    protected function fallbackTier(string $destinationAddress, ?int $destinationId): int
    {
        $address = strtolower(trim($destinationAddress));

        if (preg_match('/\b(sukabumi|cianjur|bogor)\b/', $address)) {
            return 0;
        }

        if (preg_match('/\b(banten|serang|tangerang|cilegon|lebak|pandeglang|jakarta|dki|bandung|jawa barat)\b/', $address)) {
            return 1;
        }

        if (preg_match('/\b(jawa tengah|jawa tengah|semarang|solo|surakarta|yogyakarta|jogja|jawa timur|surabaya|malang|jember|sidoarjo|gresik|batu)\b/', $address)) {
            return 2;
        }

        // Cianjur is city ID 105 in the legacy RajaOngkir city list.
        if ($destinationId === 105) {
            return 0;
        }

        return 1;
    }

    public function estimateShippingCostLocal(string $originAddress, string $destinationAddress, int $weightGrams = 1000, string $courier = 'jne'): int
    {
        $originRaw = strtolower(trim($originAddress));
        $destinationRaw = strtolower(trim($destinationAddress));

        // Resolve origin and destination to city IDs
        $originId = null;
        $destinationId = null;

        if (is_numeric($originRaw)) {
            $originId = (int) $originRaw;
        } else {
            $originId = $this->findCityIdFromAddressLocal($originRaw);
        }

        if (is_numeric($destinationRaw)) {
            $destinationId = (int) $destinationRaw;
        } else {
            $destinationId = $this->findCityIdFromAddressLocal($destinationRaw);
        }

        $tier = $this->fallbackTier($destinationRaw, $destinationId);
        $baseCost = $this->pricingByTier[$tier];

        // Add weight surcharge (over 1kg)
        if ($weightGrams > 1000) {
            $extraKg = ceil(($weightGrams - 1000) / 1000);
            $baseCost += $extraKg * 4000;
        }

        return max(10000, $baseCost);
    }
}
