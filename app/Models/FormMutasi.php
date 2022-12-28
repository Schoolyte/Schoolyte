<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormMutasi extends Model
{
    use HasFactory;
    protected $table = "mutasikeluar";
    protected $guarded = [];
    public $timestamps = false;
}
