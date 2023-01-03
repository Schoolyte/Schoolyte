<?php

namespace App\Http\Controllers\Pkantin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use App\Models\Stand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PesananMasukController extends Controller
{
    public function index(Request $request)
    {
        if ($request->get('action') == 'konfirmasi') {
            $pesanan = Pesanan::findOrFail($request->id);
            
            DB::transaction(function () use($pesanan) {
                $pesanan->update([
                    'status' => 'dikonfirmasi'
                ]);
                $pesanan->stand->update([
                    'saldo' => $pesanan->stand->saldo + $pesanan->total_harga
                ]);
            });
            return redirect()->route('pkantin.dashboard.pesanan-masuk.index');
        } else {
            $pegawai = Auth::guard('pegawaikantin')->user();
            $stands = Stand::where('p_kantin_id', '=', $pegawai->id)->get();
            $idStands = [];
            foreach ($stands as $stand) {
                if(!in_array($stand->id, $idStands)) {
                    array_push($idStands, $stand->id);
                }
            }
            $arrStands = Stand::whereIn('id', $idStands)->get();
            $pesanans = Pesanan::whereIn('stand_id', $idStands)->get();
            return view('Pkantin.pesanan-masuk.index', compact('pesanans'));
        }
        
        
    }
}
