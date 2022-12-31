<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eksternal extends Model
{
    use SoftDeletes;
    protected $table = 'eksternals';
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
            'status',
            'image',
    ];
    public function siswa()
    {
    return $this->hasOne(Siswa::class);
    }
}
