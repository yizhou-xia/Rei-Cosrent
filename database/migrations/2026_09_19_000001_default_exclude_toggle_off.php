<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('data_kostum')->update(['is_exclude_active' => false]);

        Schema::table('data_kostum', function (Blueprint $table) {
            $table->boolean('is_exclude_active')->default(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('data_kostum', function (Blueprint $table) {
            $table->boolean('is_exclude_active')->default(true)->change();
        });
    }
};
