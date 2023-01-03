<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PegawaiKantin;
use Illuminate\Http\Request;

class CrudPegawaiKantinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawaikantins = PegawaiKantin::all();
        return view('Admin.crud-pegawaikantin.index', compact('pegawaikantins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.crud-pegawaikantin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PegawaiKantin::create([
            'email' => $request->email,
            'pass' => $request->pass,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tlpn' => $request->tlpn,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'saldo' => 0,
            'status' => $request->status,
            'image' => ""
        ]);
        return redirect()->route('admin.dashboard.crud-pegawaikantin.index');
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
        $pegawaikantin = PegawaiKantin::findOrFail($id);
        return view('Admin.crud-pegawaikantin.edit', compact('pegawaikantin'));
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
        $pegawaikantin = PegawaiKantin::findOrFail($id);

        $pegawaikantin->update($request->only(
            'email',
            'pass',
            'nama',
            'alamat',
            'tlpn',
            'jenis_kelamin',
            'tempat_lahir',
            'tgl_lahir',
            'agama',
            'status'
        ));

        return redirect()->route('admin.dashboard.crud-pegawaikantin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawaikantin = PegawaiKantin::findOrFail($id);
        $pegawaikantin->delete();

        return redirect()->route('admin.dashboard.crud-pegawaikantin.index');
    }
}
