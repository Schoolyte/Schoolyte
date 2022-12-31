<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\NilaiKeterampilan;
use Auth;
use Illuminate\Http\Request;

class RaporController extends Controller
{
    public function rapor()
    {
        $siswa = Auth::guard('siswa')->user() ?? Auth::guard('walisiswa')->user()->siswa;
        $nilais = Nilai::all()->where('siswa_id', '=', $siswa->id);
        $arrIdKelas = [];
        foreach ($nilais as $nilai) {
            if(!in_array($nilai->kelas_id, $arrIdKelas)) {
                array_push($arrIdKelas, $nilai->kelas_id);
            }
        }
        $arrKelas = Kelas::whereIn('id', $arrIdKelas)->get();

        $kelasId = $_GET['kelasId'] ?? @$arrIdKelas[0] ?? '';

        return view('Rapor.RaporSiswa', compact('siswa', 'nilais', 'arrKelas', 'arrIdKelas'));
    }

    public function raporganjil()
    {
        $siswa = Auth::guard('siswa')->user() ?? Auth::guard('walisiswa')->user()->siswa;
        $kelasId = $_GET['kelasId'] ?? '';
        $nilai = Nilai::with('mapel')->where('kelas_id', '=', $kelasId)->where('siswa_id', '=', $siswa->id)->where('semester', '=', 1)->get();
        $nilaip = NilaiKeterampilan::with('mapel')->where('kelas_id', '=', $kelasId)->where('siswa_id', '=', $siswa->id)->where('semester', '=', 1)->get();

        return view('Rapor.RaporGanjil', compact('nilai', 'nilaip'));
    }

    public function raporgenap()
    {
        $siswa = Auth::guard('siswa')->user() ?? Auth::guard('walisiswa')->user()->siswa;
        $kelasId = $_GET['kelasId'] ?? '';
        $nilai = Nilai::with('mapel')->where('kelas_id', '=', $kelasId)->where('siswa_id', '=', $siswa->id)->where('semester', '=', 2)->get();
        $nilaip = NilaiKeterampilan::with('mapel')->where('kelas_id', '=', $kelasId)->where('siswa_id', '=', $siswa->id)->where('semester', '=', 2)->get();
        return view('Rapor.RaporGenap', compact('nilai', 'nilaip'));
    }
}
