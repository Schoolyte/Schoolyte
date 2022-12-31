<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProkerOsis extends Model
{
    use SoftDeletes;
    protected $table = 'proker_osis';
    protected $fillable = [
            'divisi_osis_id',
            'proker',

    ];
}
