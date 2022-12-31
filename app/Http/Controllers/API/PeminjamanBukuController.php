<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PeminjamanBuku;
use Illuminate\Http\Request;

class PeminjamanBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PeminjamanBuku::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'siswa_id'=>'required',
            'buku_id'=>'required',
            'tgl_pinjam'=>'required',
            'wkt_pinjam'=>'required',
            'tgl_kembali'=>'required',
            'wkt_kembali'=>'required',
            'jumlah'=>'required',
            
        ]);
       $data = $request->except(['_token']);
        PeminjamanBuku::insert($data);
        if($data){
            return response()->json(['success'=>true]);
        }else{
            return response()->json(['success'=>false]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = PeminjamanBuku::find($id);
        $data->delete();
        if($data){
            return response()->json(['succcess'=> true ]);
        }else{
            return response()->json(['success'=>false]);
        }
    }
}
