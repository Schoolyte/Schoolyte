<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\JadwalKelas;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Http\Request;

class CrudJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = JadwalKelas::all();
        return view('Admin.crud-jadwal.index', compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelass = Kelas::all();
        $gurus = Guru::all();
        $mapels = Mapel::all();
        return view('Admin.crud-jadwal.create', compact('kelass', 'gurus', 'mapels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JadwalKelas::create([
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
            'guru_id' => $request->guru_id,
            'hari' => $request->hari,
            'jam' => $request->jam
        ]);
        return redirect()->route('admin.dashboard.crud-jadwal.index');
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
        $jadwal = JadwalKelas::findOrFail($id);
        $kelass = Kelas::all();
        $gurus = Guru::all();
        $mapels = Mapel::all();
        return view('Admin.crud-jadwal.edit', compact('jadwal', 'kelass', 'gurus', 'mapels'));
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
        $jadwal = JadwalKelas::findOrFail($id);

        $jadwal->update($request->only(
            'kelas_id',
            'mapel_id',
            'guru_id',
            'hari',
            'jam'
        ));

        return redirect()->route('admin.dashboard.crud-jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = JadwalKelas::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('admin.dashboard.crud-jadwal.index');
    }
}
