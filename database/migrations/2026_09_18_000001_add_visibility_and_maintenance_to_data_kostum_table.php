<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('data_kostum', function (Blueprint $table) {
            $table->boolean('is_active')->default(true)->after('gambar5');
            $table->boolean('is_maintenance')->default(false)->after('is_active');
        });
    }

    public function down(): void
    {
        Schema::table('data_kostum', function (Blueprint $table) {
            $table->dropColumn(['is_active', 'is_maintenance']);
        });
    }
};
