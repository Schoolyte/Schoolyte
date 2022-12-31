<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use SoftDeletes;
    protected $table = 'menus';
    protected $fillable = [
            'stand_id',
            'nama_menu',
            'harga',
            'image'

    ];
}
