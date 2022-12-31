<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use SoftDeletes;
    protected $table = 'kelas';
    protected $fillable = [
            'nama_kelas',
            'guru_id'

    ];
    public function absensiswas()
    {
    return $this->hasMany(AbsenSiswa::class);
    }
    public function siswas()
    {
    return $this->hasMany(Siswa::class);
    }
    public function nilais()
    {
    return $this->hasMany(Nilai::class);
    }
    public function jadwalkelas()
    {
    return $this->hasMany(JadwalKelas::class);
    }
    public function jadwalmapel()
    {
    return $this->hasMany(jadwalmapel::class);
    }
    public function nilaiketerampilan()
    {
    return $this->hasMany(NilaiKeterampilan::class);
    }

    public function guru()
    {
    return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
}
