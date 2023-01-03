<?php

namespace App\Http\Controllers;

use App\Models\PegawaiPerpustakaan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePegawaiPerpustakaanRequest;
use App\Http\Requests\UpdatePegawaiPerpustakaanRequest;

class PegawaiPerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePegawaiPerpustakaanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePegawaiPerpustakaanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PegawaiPerpustakaan  $pegawaiPerpustakaan
     * @return \Illuminate\Http\Response
     */
    public function show(PegawaiPerpustakaan $pegawaiPerpustakaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PegawaiPerpustakaan  $pegawaiPerpustakaan
     * @return \Illuminate\Http\Response
     */
    public function edit(PegawaiPerpustakaan $pegawaiPerpustakaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePegawaiPerpustakaanRequest  $request
     * @param  \App\Models\PegawaiPerpustakaan  $pegawaiPerpustakaan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePegawaiPerpustakaanRequest $request, PegawaiPerpustakaan $pegawaiPerpustakaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PegawaiPerpustakaan  $pegawaiPerpustakaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PegawaiPerpustakaan $pegawaiPerpustakaan)
    {
        //
    }
}
