<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Siswa::create([
            'kelas_id' => 11,
            'eksternal_id' => 1,
            'email' => 'Happy220201@schoolyte.ac.id',
            'pass' => 'password',
            'nama' => 'Happy',
            'no_absen' => 1,
            'alamat' => 'Jl. Siswa',
            'tlpn' => 123123123,
            'nis' => 123123123,
            'jenis_kelamin' => 'P',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2000-01-01',
            'agama' => 'Islam',
            'saldo' => 0,
            'semester' => 1,
            'status' => 'aktif',
            'image' => ""
        ]);
    }
}
