<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalKelasController extends Controller
{
    public function jadwalkelas()
    {
        return view('Jadwal.JadwalKelas');
    }
}
