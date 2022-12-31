<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use SoftDeletes;
    protected $table = 'beritas';
    protected $fillable = [
            'judul',
            'isi',
            'nama_penulis',
            'tanggal',
            'image',
    ];
}
