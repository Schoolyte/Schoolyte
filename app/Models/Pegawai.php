<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pegawai extends Authenticatable
{
    use SoftDeletes;
    protected $table = 'pegawais';
    protected $fillable = [
        'email',
        'pass',
        'nama',
        'alamat',
        'tlpn',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'saldo',
        'status',
        'image',
];
}
