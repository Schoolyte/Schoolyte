<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\PegawaiKantin;
use App\Models\Siswa;
use App\Models\Topup;
use DB;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    public function index(Request $request)
    {
        if ($request->get('action') === 'konfirmasi') {
            DB::transaction(function () use ($request) {
                $topup = Topup::findOrFail($request->get('id'));
                $topup->update([
                    'status' => 'dikonfirmasi'
                ]);
                if ($topup->status === 'dikonfirmasi') {
                    $user = null;
                    if ($topup->role === 'siswa') $user = Siswa::findOrFail($topup->user_id);
                    if ($topup->role === 'guru') $user = Guru::findOrFail($topup->user_id);
                    if ($topup->role === 'pegawaikantin') $user = PegawaiKantin::findOrFail($topup->user_id);


                    // if topup
                    if ($user !== null) {
                        if ($topup->type === 'tarik') {
                            $user->update([
                                'saldo' => $user->saldo - $topup->amount
                            ]);
                        } else {
                            $user->update([
                                'saldo' => $user->saldo + $topup->amount
                            ]);
                        }
                    }
                }
            });
            return redirect()->route('pegawai.dashboard.topup');
        } else {
            $topups = Topup::all();
            return view('Pegawai.topup', compact('topups'));
        }
    }

    public function detail($id)
    {
        $topup = Topup::findOrFail($id);
        return view('Pegawai.topup_detail', compact('topup'));
    }
}
