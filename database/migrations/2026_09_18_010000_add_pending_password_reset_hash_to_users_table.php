<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'password_reset_pending_hash')) {
                $column = $table->string('password_reset_pending_hash')->nullable();
                if (Schema::hasColumn('users', 'password_reset_approved_at')) {
                    $column->after('password_reset_approved_at');
                }
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'password_reset_pending_hash')) {
                $table->dropColumn('password_reset_pending_hash');
            }
        });
    }
};