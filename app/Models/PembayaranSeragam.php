<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PembayaranSeragam extends Model
{
    use SoftDeletes;
    protected $table = 'pembayaran_seragams';
    protected $fillable = [
        'siswa_id',
        'nominal',
        'status',
        'tgl_pembayaran',
    ];
}
