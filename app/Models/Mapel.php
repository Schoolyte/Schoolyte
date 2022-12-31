<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mapel extends Model
{
    use SoftDeletes;
    protected $table = 'mapels';
    protected $fillable = [
            'mapel',
            'guru_id'

    ];
    public function nilais()
    {
    return $this->hasMany(Nilai::class);
    }
    public function jadwalkelas()
    {
    return $this->hasMany(JadwalKelas::class);
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
