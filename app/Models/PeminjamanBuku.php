<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PeminjamanBuku extends Model
{
    protected $table = 'peminjaman_bukus';
    protected $fillable = [
        'siswa_id',
        'buku_id',
        'tgl_pinjam',
        'tgl_kembali',
        'jumlah',
        'pengembalian',
        'telat',
        'status',
        'sanksi'
    ];
}
