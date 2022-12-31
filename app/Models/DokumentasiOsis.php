<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DokumentasiOsis extends Model
{
    use SoftDeletes;
    protected $table = 'dokumentasi_osis';
    protected $fillable = [
            'divisi_osis_id',
            'image',

    ];
}
