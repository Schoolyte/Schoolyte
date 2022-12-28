<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutasiMasuk extends Model
{
    use HasFactory;
    protected $table = "mutasimasuk";
    protected $guarded = [];
    public $timestamps = false;

}
