<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Admin::create([
            'nama' => 'Admin 1',
            'email' => 'admin@example.com',
            'pass' => 'password',
            'alamat' => 'Jl. Admin',
            'tlpn_siswa' => '0895337123123',
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '1999-12-12',
            'agama' => 'Islam',
            'status' => 'A',
            'image' => 'default.png',
        ]);

        \App\Models\Guru::create([
            'nama' => 'Guru 1',
            'email' => 'guru@example.com',
            'pass' => 'password',
            'alamat' => 'Jl. Aweawe No. 1',
            'tlpn' => 12312313,
            'nip' => 12312313,
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2000-01-01',
            'agama' => 'Islam',
            'saldo' => 0,
            'status' => '1',
            'image' => 'guru1.jpg'
        ]);


        \App\Models\Kelas::create([
            'nama_kelas' => 'XII RPL 1',
            'guru_id' => 1,
        ]);

        \App\Models\Siswa::create([
            'kelas_id' => 1,
            'eksternal_id' => 0,
            'email' => 'siswa@example.com',
            'pass' => 'password',
            'nama' => 'Siswa 1',
            'no_absen' => 11,
            'alamat' => 'Jl. Siswa',
            'tlpn' => 123123123,
            'nis' => 123123123,
            'jenis_kelamin' => 'L',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2000-01-01',
            'agama' => 'Islam',
            'saldo' => 0,
            'semester' => 1,
            'status' => 'aktif',
            'image' => ""
        ]);

        \App\Models\WaliSiswa::create([
            'siswa_id' => 1,
            'nama' => 'Wali Siswa 1',
            'email' => 'walisiswa@example.com',
            'pass' => 'password',
            'tlpn' => 123123123,
        ]);


        // mapel
        \App\Models\Mapel::create([
            'mapel' => 'Bahasa Indonesia',
            'guru_id' => 1,
        ]);
        \App\Models\Mapel::create([
            'mapel' => 'Bahasa Inggris',
            'guru_id' => 1,
        ]);
        \App\Models\Mapel::create([
            'mapel' => 'Matematika',
            'guru_id' => 1,
        ]);
        \App\Models\JadwalKelas::create([
            'kelas_id' => 1,
            'mapel_id' => 1,
            'guru_id' => 1,
            'hari' => 'senin',
            'jam' => '07:00',
        ]);
        \App\Models\JadwalKelas::create([
            'kelas_id' => 1,
            'mapel_id' => 2,
            'guru_id' => 1,
            'hari' => 'senin',
            'jam' => '09:00',
        ]);
        \App\Models\JadwalKelas::create([
            'kelas_id' => 1,
            'mapel_id' => 3,
            'guru_id' => 1,
            'hari' => 'selasa',
            'jam' => '07:00',
        ]);
    }
}
