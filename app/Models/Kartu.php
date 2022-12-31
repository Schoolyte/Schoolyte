<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kartu extends Model
{
    use SoftDeletes;
    protected $table = 'kartus';
    protected $fillable = [
        'siswa_id',
        'image'
    ];
}
