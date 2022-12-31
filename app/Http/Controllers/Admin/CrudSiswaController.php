<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class CrudSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('Admin.crud-siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelass = Kelas::all();
        return view('Admin.crud-siswa.create', compact('kelass'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa::create([
            'kelas_id' => $request->kelas_id,
            'eksternal_id' => 0,
            'email' => $request->email,
            'pass' => $request->pass,
            'nama' => $request->nama,
            'no_absen' => $request->no_absen,
            'alamat' => $request->alamat,
            'tlpn' => $request->tlpn,
            'nis' => $request->nis,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'saldo' => 0,
            'semester' => $request->semester,
            'status' => $request->status,
            'image' => ""
        ]);
        return redirect()->route('admin.dashboard.crud-siswa.index');
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
        $siswa = Siswa::findOrFail($id);
        $kelass = Kelas::all();
        return view('Admin.crud-siswa.edit', compact('siswa', 'kelass'));
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
        $siswa = Siswa::findOrFail($id);

        $siswa->update($request->only(
            'kelas_id',
            'email',
            'pass',
            'nama',
            'no_absen',
            'alamat',
            'tlpn',
            'nis',
            'jenis_kelamin',
            'tempat_lahir',
            'tgl_lahir',
            'agama',
            'semester',
            'status'
        ));

        return redirect()->route('admin.dashboard.crud-siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('admin.dashboard.crud-siswa.index');
    }
}
