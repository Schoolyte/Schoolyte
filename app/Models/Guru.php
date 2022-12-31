<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guru extends Authenticatable
{
    use SoftDeletes;
    protected $table = 'gurus';
    protected $fillable = [
            'email',
            'pass',
            'nama',
            'alamat',
            'tlpn',
            'nip',
            'jenis_kelamin',
            'tempat_lahir',
            'tgl_lahir',
            'agama',
            'saldo',
            'status',
            'image',
    ];
    public function ekskul()
    {
    return $this->hasMany(Ekskul::class);
    }
    public function walikelas()
    {
    return $this->hasMany(Kelas::class);
    }
    public function mapel()
    {
    return $this->hasOne(Mapel::class);
    }
    public function jadwalkelas()
    {
    return $this->hasMany(JadwalKelas::class);
    }
    public function jadwalmapel()
    {
    return $this->hasMany(JadwalMapel::class);
    }
}
