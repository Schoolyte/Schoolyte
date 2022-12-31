<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Koperasi extends Model
{
    use SoftDeletes;
    protected $table = 'koperasis';
    protected $fillable = [
        'nama',
        'stok',
        'harga',
        'image'
    ];
}
