<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalMapel extends Model
{
    use SoftDeletes;
    protected $table = 'jadwal_mapels';
    protected $fillable = [
            'guru_id',
            'kelas_id',
            'hari',
            'jam',

    ];
}
