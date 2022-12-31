<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PeminjamanFasilitas extends Model
{
    use SoftDeletes;
    protected $table = 'peminjaman_fasilitas';
    protected $fillable = [
            'siswa_id',
            'fasilitas_id',
            'tgl_pinjam',
            'mulai',
            'berakhir',
    ];
}
