<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukKantin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga',
        'gambar',
        'jumlah',
        'deskripsi',
    ];
    protected $table = "produk_kantin";
}
