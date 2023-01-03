<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'siswa_id',
        'guru_id',
        'total_harga',
        'stand_id',
        'catatan',
        'status'
    ];

    public function pesanan_menu()
    {
        return $this->hasMany(PesananMenu::class, 'pesanan_id', 'id');
    }

    public function stand()
    {
        return $this->belongsTo(Stand::class, 'stand_id', 'id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
}
