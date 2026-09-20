<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        foreach (range(1, 5) as $slot) {
            $column = 'gambar' . $slot;

            if (!Schema::hasColumn('data_kostum', $column)) {
                Schema::table('data_kostum', function (Blueprint $table) use ($column) {
                    $table->string($column)->nullable();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach (range(1, 5) as $slot) {
            $column = 'gambar' . $slot;

            if (Schema::hasColumn('data_kostum', $column)) {
                Schema::table('data_kostum', function (Blueprint $table) use ($column) {
                    $table->dropColumn($column);
                });
            }
        }
    }
};
