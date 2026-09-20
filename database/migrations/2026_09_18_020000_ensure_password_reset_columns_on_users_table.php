<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'password_reset_requested_at')) {
                $table->timestamp('password_reset_requested_at')->nullable();
            }
            if (!Schema::hasColumn('users', 'password_reset_approved_at')) {
                $table->timestamp('password_reset_approved_at')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            foreach (['password_reset_approved_at', 'password_reset_requested_at'] as $column) {
                if (Schema::hasColumn('users', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
