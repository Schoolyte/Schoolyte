<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pegawai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pegawai::create([
            'email' => 'pegawai@example.com',
            'pass' => 'password',
            'nama' => 'Pegawai 1',
            'alamat' => 'Jl. pegawai',
            'tlpn' => 123123123,
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2000-01-01',
            'nik' => 123123123,
            'agama' => 'Islam',
            'saldo' => 0,
            'status' =>'aktif',
            'image' => ""
        ]);


    }
}
