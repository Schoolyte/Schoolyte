<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class CrudGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::all();
        return view('Admin.crud-guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gurus = Guru::all();
        return view('Admin.crud-guru.create', compact('gurus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Guru::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pass' => $request->pass,
            'alamat' => $request->alamat,
            'tlpn' => $request->tlpn,
            'nip' => $request->nip,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'saldo' => 0,
            'status' => '1',
            'image' => 'guru1.jpg'
        ]);

        return redirect()->route('admin.dashboard.crud-guru.index');
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
        $guru = Guru::findOrFail($id);
        return view('Admin.crud-guru.edit', compact('guru'));
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
        $guru = Guru::findOrFail($id);

        $guru->update($request->only('nama', 'email', 'pass', 'alamat', 'tlpn', 'nip', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'agama'));

        return redirect()->route('admin.dashboard.crud-guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('admin.dashboard.crud-guru.index');
    }
}
