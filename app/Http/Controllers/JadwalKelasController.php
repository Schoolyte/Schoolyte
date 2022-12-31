<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JadwalKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalKelasController extends Controller
{
    public function jadwalkelas()
    {
        $siswa = Auth::guard('siswa')->user();
        $hari = $_GET['hari'] ?? 'senin';
        $jadwals = JadwalKelas::all()->where('kelas_id', '=', $siswa->kelas_id)->where('hari', '=', $hari);
        return view('Jadwal.JadwalKelas', compact('siswa', 'hari', 'jadwals'));
    }
}
