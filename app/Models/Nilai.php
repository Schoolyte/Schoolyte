<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nilai extends Model
{
    use SoftDeletes;
    protected $table = 'nilais';
    protected $fillable = [
        'siswa_id',
        'mapel_id',
        'kelas_id',
        'tugas1',
        'tugas2',
        'tugas3',
        'uts',
        'uas',
        'rata2',
        'semester',
    ];

    public function mapel()
    {
    return $this->belongsTo(Mapel::class, 'mapel_id', 'id');
    }
}
