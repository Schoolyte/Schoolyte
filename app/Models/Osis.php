<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Osis extends Model
{
    use SoftDeletes;
    protected $table = 'osis';
    protected $fillable = [
            'siswa_id',
            'divisi_osis_id',
            'jabatan',

    ];
}
