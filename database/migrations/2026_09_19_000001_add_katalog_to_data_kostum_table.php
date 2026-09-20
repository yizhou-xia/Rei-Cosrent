<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('data_kostum', function (Blueprint $table) {
            $table->string('katalog')->nullable()->after('kategori');
        });

        $kostums = DB::table('data_kostum')->select('id_kostum', 'kategori', 'judul')->get();
        foreach ($kostums as $kostum) {
            $legacyCatalogName = trim((string) $kostum->kategori);
            $catalog = DB::table('data_katalog')
                ->whereRaw('LOWER(name) = ?', [strtolower(trim((string) $kostum->judul))])
                ->first();

            if (!$catalog) {
                $catalog = DB::table('data_katalog')
                    ->whereRaw('LOWER(name) = ?', [strtolower($legacyCatalogName)])
                    ->first();
            }

            $catalogName = $catalog ? $catalog->name : ($legacyCatalogName !== '' ? $legacyCatalogName : null);
            $catalogCategory = $catalog && trim((string) $catalog->kategori) !== ''
                ? $catalog->kategori
                : $kostum->kategori;

            DB::table('data_kostum')
                ->where('id_kostum', $kostum->id_kostum)
                ->update([
                    'katalog' => $catalogName,
                    'kategori' => $catalogCategory,
                ]);
        }
    }

    public function down(): void
    {
        Schema::table('data_kostum', function (Blueprint $table) {
            $table->dropColumn('katalog');
        });
    }
};
