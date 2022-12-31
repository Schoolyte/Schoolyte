<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\NilaiKeterampilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenilaianController extends Controller
{
    public function penilaian()
    {
        $siswa = Auth::guard('siswa')->user();
        $nilais = Nilai::all()->where('siswa_id', '=', $siswa->id);
        $arrIdKelas = [];
        foreach ($nilais as $nilai) {
            if(!in_array($nilai->kelas_id, $arrIdKelas)) {
                array_push($arrIdKelas, $nilai->kelas_id);
            }
        }
        $arrKelas = Kelas::whereIn('id', $arrIdKelas)->get();

        $kelasId = $_GET['kelasId'] ?? @$arrIdKelas[0] ?? '';

        $nilaiS1 = Nilai::where('kelas_id', '=', $kelasId)->where('siswa_id', '=', $siswa->id)->where('semester', '=', 1)->get();
        $nilaiS1P = NilaiKeterampilan::where('kelas_id', '=', $kelasId)->where('siswa_id', '=', $siswa->id)->where('semester', '=', 1)->get();

        $nilaiS2 = Nilai::where('kelas_id', '=', $kelasId)->where('siswa_id', '=', $siswa->id)->where('semester', '=', 2)->get();
        $nilaiS2P = NilaiKeterampilan::where('kelas_id', '=', $kelasId)->where('siswa_id', '=', $siswa->id)->where('semester', '=', 2)->get();
        return view('Penilaian.Penilaiansiswa1', compact('siswa', 'nilais', 'arrKelas', 'nilaiS1', 'nilaiS1P', 'nilaiS2', 'nilaiS2P'));
    }
}
