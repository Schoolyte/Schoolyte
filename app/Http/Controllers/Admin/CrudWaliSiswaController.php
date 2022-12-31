<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\WaliSiswa;
use Illuminate\Http\Request;

class CrudWaliSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $siswas = Siswa::all();
        $walisiswas = WaliSiswa::all();
        return view('Admin.crud-wali.index', compact('walisiswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswas = Siswa::all();
        return view('Admin.crud-wali.create', compact('siswas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        WaliSiswa::create([
            'siswa_id' => $request->siswa_id,
            'nama' => $request->nama,
            'email' => $request->email,
            'pass' => $request->pass,
            'tlpn' => $request->tlpn,
        ]);
        return redirect()->route('admin.dashboard.crud-wali.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $walisiswa = WaliSiswa::findOrFail($id);
        $siswas = Siswa::all();
        return view('Admin.crud-wali.edit', compact('walisiswa', 'siswas'));
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
        $walisiswa = WaliSiswa::findOrFail($id);

        $walisiswa->update($request->only('siswa_id', 'nama', 'email', 'pass', 'tlpn'));

        return redirect()->route('admin.dashboard.crud-wali.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wali = WaliSiswa::findOrFail($id);
        $wali->delete();

        return redirect()->route('admin.dashboard.crud-wali.index');
    }
}
