<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ekskul extends Model
{
    use SoftDeletes;
    protected $table = 'ekskuls';
    protected $fillable = [
            'nama_ekskul',
            'pembina',
            'jadwal',
            'decs',
            'image',
    ];
    public function prestasi()
    {
    return $this->hasMany(PrestasiEkskul::class);
    }
}
