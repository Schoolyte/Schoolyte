<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class stand extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Stand::create([
            'nama_stand' => 'Nasi Gokil',
            'jenis_stand' => 'Makanan dan Minuman',
            'kode_stand' => 0,
            'barcode_stand' => 'abc',
            'p_kantin_id' => 2,
            'image' => 'pecel.jpg',
        ]);
    }
}
