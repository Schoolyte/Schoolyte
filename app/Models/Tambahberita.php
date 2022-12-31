<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambahberita extends Model
{
    use HasFactory;
    protected $table = "berita_sekolah";
    protected $guarded = [];
    public $timestamps = false;
}

