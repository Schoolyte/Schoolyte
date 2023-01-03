<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananMenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'pesanan_id',
        'menu_id',
        'qty',
        'harga'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
