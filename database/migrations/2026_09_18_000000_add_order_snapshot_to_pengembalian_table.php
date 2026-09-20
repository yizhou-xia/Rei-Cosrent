<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('pengembalian')) {
            return;
        }

        Schema::table('pengembalian', function (Blueprint $table) {
            if (!Schema::hasColumn('pengembalian', 'snapshot_nama')) {
                $table->string('snapshot_nama')->nullable()->after('formulir_id');
            }
            if (!Schema::hasColumn('pengembalian', 'snapshot_email')) {
                $table->string('snapshot_email')->nullable()->after('snapshot_nama');
            }
            if (!Schema::hasColumn('pengembalian', 'snapshot_nama_kostum')) {
                $table->string('snapshot_nama_kostum')->nullable()->after('snapshot_email');
            }
        });
    }

    public function down(): void
    {
        if (!Schema::hasTable('pengembalian')) {
            return;
        }

        Schema::table('pengembalian', function (Blueprint $table) {
            $columns = [];
            foreach (['snapshot_nama_kostum', 'snapshot_email', 'snapshot_nama'] as $column) {
                if (Schema::hasColumn('pengembalian', $column)) {
                    $columns[] = $column;
                }
            }
            if ($columns) {
                $table->dropColumn($columns);
            }
        });
    }
};
