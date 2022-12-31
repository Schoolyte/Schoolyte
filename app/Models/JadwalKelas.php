<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalKelas extends Model
{
    use SoftDeletes;
    protected $table = 'jadwal_kelas';
    protected $fillable = [
            'mapel_id',
            'kelas_id',
            'guru_id',
            'hari',
            'jam',

    ];

    public function kelas()
    {
    return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
    public function mapel()
    {
    return $this->belongsTo(Mapel::class, 'mapel_id', 'id');
    }
    public function guru()
    {
    return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
}
