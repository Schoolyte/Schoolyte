<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pegawai::all();
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
            'email'=>'required',
            'pass'=>'required|min:6',
            'nama'=>'required',
            'alamat'=>'required',
            'tlpn'=>'required',
            'jenis_kelamin'=>'required|max:2',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'agama'=>'required|max:10',
            'saldo'=>'required',
            'status'=>'required',
            'image' => 'required|image|mimes:jpg,png,gif,svf:max:2048',
            
        ]);

        $data = $request->except(['_token']);
        if($request->file('image')){
            $imgName = time().'.'.$request->file('image')->extension();
            $data['image'] = $request->file('image')->move('pegawai', $imgName);
        };
        Pegawai::insert($data);
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
        $data = Pegawai::find($id);
        $data->delete();
        if($data){
            return response()->json(['succcess'=> true ]);
        }else{
            return response()->json(['success'=>false]);
        }
    }
}
