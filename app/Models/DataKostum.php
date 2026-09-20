<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataKostum extends Model
{
    protected $table = 'data_kostum';
    protected $primaryKey = 'id_kostum';
    public $timestamps = false;

    protected $fillable = [
        'katalog',
        'kategori',
        'nama_kostum',
        'judul',
        'harga_sewa',
        'durasi_penyewaan',
        'ukuran_kostum',
        'jenis_kelamin',
        'include',
        'exclude',
        'harga_exclude',
        'is_exclude_active',
        'brand',
        'gambar1',
        'gambar2',
        'gambar3',
        'gambar4',
        'gambar5',
        'is_active',
        'is_maintenance',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_maintenance' => 'boolean',
        'is_exclude_active' => 'boolean',
        'harga_exclude' => 'decimal:2',
    ];
}
