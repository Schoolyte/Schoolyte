<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PeminjamanBuku extends Model
{
    use SoftDeletes;
    protected $table = 'peminjaman_bukus';
    protected $fillable = [
            'siswa_id',
            'buku_id',
            'tgl_pinjam',
            'wkt_pinjam',
            'tgl_kembali',
            'wkt_kembali',
            'jumlah'
    ];
}
