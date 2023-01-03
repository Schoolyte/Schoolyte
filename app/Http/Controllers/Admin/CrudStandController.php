<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PegawaiKantin;
use App\Models\Pesanan;
use App\Models\Stand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class CrudStandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stands = Stand::all();
        return view('Admin.crud-stand.index', compact('stands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pkantins = PegawaiKantin::all();
        return view('Admin.crud-stand.create', compact('pkantins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Stand::create([
            'nama_stand' => $request->nama_stand,
            'jenis_stand' => $request->jenis_stand,
            'kode_stand' => $request->kode_stand,
            'p_kantin_id' =>$request->p_kantin_id,
            'barcode_stand' => '',
            'image' => $request->image
        ]);
        return redirect()->route('admin.dashboard.crud-stand.index');
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
        $stand = Stand::findOrFail($id);
        $pkantins = PegawaiKantin::all();
        return view('Admin.crud-stand.edit', compact('stand', 'pkantins'));
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
        $stand = Stand::findOrFail($id);

        $stand->update($request->only(
            'nama_stand',
            'jenis_stand',
            'p_kantin_id',
            'kode_stand',
            'image'
        ));

        return redirect()->route('admin.dashboard.crud-stand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stand = Stand::findOrFail($id);
        $stand->delete();

        return redirect()->route('admin.dashboard.crud-stand.index');
    }

    public function daftarStand(Request $request)
    {
        $stands = Stand::all();
        $user = Auth::guard('siswa')->user() ?? Auth::guard('guru')->user();

        $role = Auth::guard('siswa')->user() ? 'siswa' : 'guru';

        if ($request->get('action') == 'selesai') {
            $pesanan = Pesanan::findOrFail($request->get('id'));
            $pesanan->update([
                'status' => 'selesai'
            ]);
            return redirect()->route('Kantin/Stand');
        } else {
            $pesanans = Pesanan::where($role . '_id', '=', $user->id)
            ->where('status', '=', 'pending')
            ->orWhere('status', '=', 'dikonfirmasi')
            ->get();

            $pesanans_selesai = Pesanan::where($role . '_id', '=', $user->id)
                ->where('status', '=', 'selesai')
                ->get();

            return view('Kantin.Stand', compact('stands', 'user', 'pesanans', 'pesanans_selesai'));
        }
    }
}
