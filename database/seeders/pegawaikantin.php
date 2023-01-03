<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pegawaikantin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PegawaiKantin::create([
            'email' => 'pegawaikantin@example.com',
            'pass' => 'password',
            'nama' => 'Pegawai Kantin 1',
            'alamat' => 'Jl. pegawaikantin',
            'tlpn' => 123123123,
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2000-01-01',
            'agama' => 'Islam',
            'saldo' => 0,
            'status' => 'aktif',
            'image' => ""
        ]);

    }
}
