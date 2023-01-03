<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    protected $table = 'bukus';
    protected $fillable = [
        'nama_buku',
        'tahun_terbit',
        'nama_penulis',
        'rincian_buku',
        'jumlah_buku',
        'image',
        'kategori_buku',
    ];
    public function peminjaman()
    {
        return $this->hasMany(PeminjamanBuku::class);
    }

    public function getRouteKeyName()
    {
        return 'nama_buku';
    }
}
