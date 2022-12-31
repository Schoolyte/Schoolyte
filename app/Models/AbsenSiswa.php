<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AbsenSiswa extends Model
{
    use SoftDeletes;
    protected $table = 'absen_siswas';
    protected $fillable = [
            'siswa_id',
            'kelas_id',
            'status_absen',
            'tgl_absen',
            'image',
    ];
}
