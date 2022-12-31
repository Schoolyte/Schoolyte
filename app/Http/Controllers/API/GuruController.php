<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Guru::all();
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
            'nip'=>'required',
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
            $data['image'] = $request->file('image')->move('guru', $imgName);
        };
        Guru::insert($data);
        if($data){
            return response()->json(['success'=>true]);
        }else{
            return response()->json(['success'=>false]);
        }
    }
    public function destroy($id)
    {
        $data = Guru::find($id);
        $data->delete();
        if($data){
            return response()->json(['succcess'=> true ]);
        }else{
            return response()->json(['success'=>false]);
        }
    }
}