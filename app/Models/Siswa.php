<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use SoftDeletes;
    protected $table = 'siswas';
    protected $fillable = [
        'eksternal_id',
        'kelas_id',
        'email',
        'pass',
        'nama',
        'no_absen',
        'alamat',
        'tlpn',
        'nis',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'saldo',
        'semester',
        'status',
        'image',
    ];
    public function absensiswas()
    {
    return $this->hasMany(AbsenSiswa::class);
    }
    public function berita()
    {
    return $this->hasMany(Berita::class);
    }
    public function nilaipengetahuan()
    {
    return $this->hasMany(Nilai::class);
    }
    public function osis()
    {
    return $this->hasOne(Osis::class);
    }
    public function peminjamanbuku()
    {
    return $this->hasMany(PeminjamanBuku::class);
    }
    public function peminjamanfasilitas()
    {
    return $this->hasMany(PeminjamanFasilitas::class);
    }
    public function mutasi()
    {
    return $this->hasOne(Mutasikeluar::class);
    }
    public function nilaiketerampilan()
    {
    return $this->hasMany(NilaiKeterampilan::class);
    }
    public function spp()
    {
    return $this->hasMany(PembayaranSpp::class);
    }
    public function pembayaranbuku()
    {
    return $this->hasMany(PembayaranBuku::class);
    }
    public function pembayaranseragam()
    {
    return $this->hasOne(PembayaranSeragam::class);
    }

    public function kelas()
    {
    return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}
