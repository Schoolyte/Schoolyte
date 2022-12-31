<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\JadwalKelas;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\NilaiKeterampilan;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jadwal_id = $request->get('jadwal_id');
        if ($jadwal_id === null) {
            // $kelass = Kelas::where('guru_id', Auth::guard('guru')->user()->id)->get();
            $jadwals = JadwalKelas::where('guru_id', Auth::guard('guru')->user()->id)->get();
            return view('Guru.crud-nilai.index', compact('jadwals'));
        } else {
            // $kelas = Kelas::findOrfail($kelas_id);
            $jadwal = JadwalKelas::findOrfail($jadwal_id);
            return view('Guru.crud-nilai.index', compact('jadwal'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $jadwal_id = $request->get('jadwal_id');
        $siswa_id = $request->get('siswa_id');
        $jadwal = JadwalKelas::findOrfail($jadwal_id);
        $siswa = Siswa::findOrfail($siswa_id);

        $nilai = Nilai::where('siswa_id', $siswa->id)
            ->where('mapel_id', $jadwal->mapel_id)
            ->where('kelas_id', $jadwal->kelas_id)
            ->where('semester', 1)
            ->first();

        $nilai_p = NilaiKeterampilan::where('siswa_id', $siswa->id)
            ->where('mapel_id', $jadwal->mapel_id)
            ->where('kelas_id', $jadwal->kelas_id)
            ->where('semester', 1)
            ->first();

        $nilais2 = Nilai::where('siswa_id', $siswa->id)
            ->where('mapel_id', $jadwal->mapel_id)
            ->where('kelas_id', $jadwal->kelas_id)
            ->where('semester', 2)
            ->first();

        $nilai_ps2 = NilaiKeterampilan::where('siswa_id', $siswa->id)
            ->where('mapel_id', $jadwal->mapel_id)
            ->where('kelas_id', $jadwal->kelas_id)
            ->where('semester', 2)
            ->first();

        return view('Guru.crud-nilai.create', compact('jadwal', 'siswa', 'nilai', 'nilai_p', 'nilais2', 'nilai_ps2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jadwal_id = $request->get('jadwal_id');
        $siswa_id = $request->get('siswa_id');
        $jadwal = JadwalKelas::findOrfail($jadwal_id);
        $siswa = Siswa::findOrfail($siswa_id);

        // dd($request->all());

        // cari nilai
        // s1
        // if not found create
        $nilai_s1_found = Nilai::where('siswa_id', $siswa->id)
            ->where('mapel_id', $jadwal->mapel_id)
            ->where('kelas_id', $jadwal->kelas_id)
            ->where('semester', 1)
            ->first();
        if ($nilai_s1_found === null) {
            $nilai_s1 = Nilai::create([
                'siswa_id' => $siswa->id,
                'mapel_id' => $jadwal->mapel_id,
                'kelas_id' => $jadwal->kelas_id,
                'semester' => 1,
                'tugas1' => $request->input('tugas1'),
                'tugas2' => $request->input('tugas2'),
                'tugas3' => $request->input('tugas3'),
                'uts' => $request->input('uts'),
                'uas' => $request->input('uas'),
                'rata2' => 0,
            ]);
        } else {
            $nilai_s1_found->update([
                'tugas1' => $request->input('tugas1'),
                'tugas2' => $request->input('tugas2'),
                'tugas3' => $request->input('tugas3'),
                'uts' => $request->input('uts'),
                'uas' => $request->input('uas'),
                'rata2' => 0,
            ]);
        }


        $nilai_p_s1_found = NilaiKeterampilan::where('siswa_id', $siswa->id)
            ->where('mapel_id', $jadwal->mapel_id)
            ->where('kelas_id', $jadwal->kelas_id)
            ->where('semester', 1)
            ->first();
        if ($nilai_s1_found === null) {
            $nilai_p_s1 = NilaiKeterampilan::create([
                'siswa_id' => $siswa->id,
                'mapel_id' => $jadwal->mapel_id,
                'kelas_id' => $jadwal->kelas_id,
                'semester' => 1,
                'tugas1' => $request->input('p_tugas1'),
                'tugas2' => $request->input('p_tugas2'),
                'tugas3' => $request->input('p_tugas3'),
                'praktikum1' => $request->input('p_pratikum1'),
                'praktikum2' => $request->input('p_pratikum2'),
                'rata2' => 0,
            ]);
        } else {
            $nilai_p_s1_found->update([
                'tugas1' => $request->input('p_tugas1'),
                'tugas2' => $request->input('p_tugas2'),
                'tugas3' => $request->input('p_tugas3'),
                'praktikum1' => $request->input('p_pratikum1'),
                'praktikum2' => $request->input('p_pratikum2'),
                'rata2' => 0,
            ]);
        }

        // s2
        // if not found create
        $nilai_s2_found = Nilai::where('siswa_id', $siswa->id)
            ->where('mapel_id', $jadwal->mapel_id)
            ->where('kelas_id', $jadwal->kelas_id)
            ->where('semester', 2)
            ->first();
        if ($nilai_s2_found === null) {
            $nilai_s2 = Nilai::create([
                'siswa_id' => $siswa->id,
                'mapel_id' => $jadwal->mapel_id,
                'kelas_id' => $jadwal->kelas_id,
                'semester' => 2,
                'tugas1' => $request->input('tugas1s2'),
                'tugas2' => $request->input('tugas2s2'),
                'tugas3' => $request->input('tugas3s2'),
                'uts' => $request->input('utss2'),
                'uas' => $request->input('uass2'),
                'rata2' => 0,
            ]);
        } else {
            $nilai_s2_found->update([
                'tugas1' => $request->input('tugas1s2'),
                'tugas2' => $request->input('tugas2s2'),
                'tugas3' => $request->input('tugas3s2'),
                'uts' => $request->input('utss2'),
                'uas' => $request->input('uass2'),
                'rata2' => 0,
            ]);
        }

        $nilai_p_s2_found = NilaiKeterampilan::where('siswa_id', $siswa->id)
            ->where('mapel_id', $jadwal->mapel_id)
            ->where('kelas_id', $jadwal->kelas_id)
            ->where('semester', 2)
            ->first();
        if ($nilai_p_s2_found === null) {
            $nilai_p_s2 = NilaiKeterampilan::create([
                'siswa_id' => $siswa->id,
                'mapel_id' => $jadwal->mapel_id,
                'kelas_id' => $jadwal->kelas_id,
                'semester' => 2,
                'tugas1' => $request->input('p_tugas1s2'),
                'tugas2' => $request->input('p_tugas2s2'),
                'tugas3' => $request->input('p_tugas3s2'),
                'praktikum1' => $request->input('p_pratikum1s2'),
                'praktikum2' => $request->input('p_pratikum2s2'),
                'rata2' => 0,
            ]);
        } else {
            $nilai_p_s2_found->update([
                'tugas1' => $request->input('p_tugas1s2'),
                'tugas2' => $request->input('p_tugas2s2'),
                'tugas3' => $request->input('p_tugas3s2'),
                'praktikum1' => $request->input('p_pratikum1s2'),
                'praktikum2' => $request->input('p_pratikum2s2'),
                'rata2' => 0,
            ]);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
