<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mapel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Mapel::create([
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
    }
}
