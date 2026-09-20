<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RajaOngkirService;
use App\Models\ProfileContact;

class RajaOngkirController extends Controller
{
    protected $raja;

    public function __construct(RajaOngkirService $raja)
    {
        $this->raja = $raja;
    }

    public function provinces()
    {
        $data = $this->raja->provinces();
        return response()->json($data);
    }

    public function cities(Request $request)
    {
        $province = $request->query('province');
        $data = $this->raja->cities($province);
        return response()->json($data);
    }

    public function cost(Request $request)
    {
        $request->validate([
            'destination_city_id' => 'required|numeric',
            'weight' => 'nullable|numeric',
            'courier' => 'nullable|string',
        ]);

        $origin = env('RAJAONGKIR_ORIGIN_CITY_ID');
        if (!$origin) {
            $admin = ProfileContact::first();
            if ($admin && $admin->origin_city_id) {
                $origin = $admin->origin_city_id;
            }
            if (!$origin && $admin && $admin->address) {
                $origin = $this->raja->findCityIdFromAddress($admin->address);
            }
        }

        if (!$origin) {
            return response()->json(['error' => 'Origin city not configured'], 422);
        }

        $weight = (int) $request->input('weight', $this->raja->packageWeightGrams());
        $courier = $request->input('courier', $this->raja->couriers()[0] ?? 'jne');

        $data = $this->raja->cost($origin, $request->input('destination_city_id'), $weight, $courier);
        return response()->json($data);
    }

    public function shippingCost(Request $request)
    {
        $request->validate([
            'address' => 'nullable|string',
        ]);

        $address = trim((string) $request->input('address', ''));
        if ($address === '') {
            return response()->json([
                'ongkir' => 0,
                'weight' => $this->raja->packageWeightGrams(),
                'warning' => 'Alamat tujuan wajib diisi sebelum ongkir dihitung.',
            ]);
        }

        $admin = ProfileContact::first();
        if (!$admin) {
            return response()->json(['error' => 'Admin profile unavailable'], 422);
        }

        $origin = env('RAJAONGKIR_ORIGIN_CITY_ID') ?: $admin->origin_city_id;
        if (!$origin && $admin->address) {
            $origin = $this->raja->findCityIdFromAddress($admin->address);
        }

        $destination = $this->raja->findCityIdFromAddress($address);
        $weight = $this->raja->packageWeightGrams();

        if ($origin && $destination) {
            $quote = $this->raja->cheapestCost($origin, $destination, $weight);
            if ($quote) {
                return response()->json([
                    'ongkir' => $quote['ongkir'],
                    'origin_city_id' => (int) $origin,
                    'destination_city_id' => (int) $destination,
                    'courier' => $quote['courier'],
                    'service' => $quote['service'],
                    'weight' => $weight,
                    'raw' => $quote,
                ]);
            }
        }

        $fallback = $this->raja->estimateShippingCostLocal(
            (string) ($admin->address ?? ''),
            $address,
            $weight
        );

        return response()->json([
            'ongkir' => $fallback,
            'weight' => $weight,
            'raw' => null,
            'source' => 'local_fallback',
            'warning' => 'API RajaOngkir belum tersedia; estimasi lokal digunakan sementara.',
        ]);
    }
}
