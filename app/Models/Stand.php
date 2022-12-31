<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stand extends Model
{
    use SoftDeletes;
    protected $table = 'stands';
    protected $fillable = [
            'nama_stand',
            'jenis_stand',
            'kode_stand',
            'barcode_stand',
            'image'

    ];
    public function menus()
    {
    return $this->hasMany(Menu::class);
    }
}
