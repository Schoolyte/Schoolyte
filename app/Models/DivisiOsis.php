<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DivisiOsis extends Model
{
    use SoftDeletes;
    protected $table = 'divisi_osis';
    protected $fillable = [
            'nama',
            'keterangan',
            'image',

    ];
    public function osis()
    {
    return $this->hasMany(Osis::class);
    }
    public function dokumentasiosis()
    {
    return $this->hasMany(DokumentasiOsis::class);
    }
    public function proker()
    {
    return $this->hasMany(ProkerOsis::class);
    }
}
