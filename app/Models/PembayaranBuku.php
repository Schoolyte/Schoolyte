<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PembayaranBuku extends Model
{
    use SoftDeletes;
    protected $table = 'pembayaran_bukus';
    protected $fillable = [
        'siswa_id',
        'kelas',
        'semester',
        'nominal',
        'bulan',
        'status',
        'tgl_pembayaran',
        'total',
    ];
}
