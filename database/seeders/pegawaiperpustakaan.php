<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pegawaiperpustakaan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PegawaiPerpustakaan::create([
            'nama' => 'Pegawai Perpustakaan 1',
            'email' => 'perpus@example.com',
            'pass' => 'password',
            'alamat' => 'Jl. Aweawe No. 1',
            'tlpn' => 12312313,
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2000-01-01',
            'agama' => 'Islam',
            'saldo' => 0,
            'status' => '1',
            'image' => 'guru1.jpg'
        ]);
    }
}
