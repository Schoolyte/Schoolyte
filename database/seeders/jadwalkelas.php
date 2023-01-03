<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class jadwalkelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\JadwalKelas::create([
            'kelas_id' => 12,
            'mapel_id' => 7,
            'guru_id' => 14,
            'hari' => 'selasa',
            'jam' => '07:00',
        ]);
        \App\Models\JadwalKelas::create([
            'kelas_id' => 12,
            'mapel_id' => 5,
            'guru_id' => 9,
            'hari' => 'rabu',
            'jam' => '09:00',
        ]);
        \App\Models\JadwalKelas::create([
            'kelas_id' => 12,
            'mapel_id' => 7,
            'guru_id' => 14,
            'hari' => 'Kamis',
            'jam' => '07:00',
        ]);
    }
}
