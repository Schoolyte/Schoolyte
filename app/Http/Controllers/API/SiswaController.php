<?php

namespace App\Http\Controllers\API;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::all();
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
            'eksternal_id'=>'required',
            'kelas_id'=>'required',
            'email'=>'required',
            'pass'=>'required|min:6',
            'nama'=>'required',
            'no_absen'=>'required',
            'alamat'=>'required',
            'tlpn'=>'required',
            'nis'=>'required',
            'jenis_kelamin'=>'required|max:2',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'agama'=>'required|max:10',
            'saldo'=>'required',
            'semester'=>'required',
            'status'=>'required',
            'image' => 'required|image|mimes:jpg,png,gif,svf:max:2048',
            
        ]);

        $data = $request->except(['_token']);
        if($request->file('image')){
            $imgName = time().'.'.$request->file('image')->extension();
            $data['image'] = $request->file('image')->move('siswa', $imgName);
        };
        Siswa::insert($data);
        if($data){
            return response()->json(['success'=>true]);
        }else{
            return response()->json(['success'=>false]);
        }
    }
    public function destroy($id)
    {
        $data = Siswa::find($id);
        $data->delete();
        if($data){
            return response()->json(['succcess'=> true ]);
        }else{
            return response()->json(['success'=>false]);
        }
    }
}
