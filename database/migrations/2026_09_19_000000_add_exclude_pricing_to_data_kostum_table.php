<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('data_kostum', function (Blueprint $table) {
            $table->decimal('harga_exclude', 10, 2)->nullable()->after('exclude');
            $table->boolean('is_exclude_active')->default(true)->after('harga_exclude');
        });
    }

    public function down(): void
    {
        Schema::table('data_kostum', function (Blueprint $table) {
            $table->dropColumn(['harga_exclude', 'is_exclude_active']);
        });
    }
};
