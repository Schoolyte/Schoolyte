<?php

namespace App\Http\Controllers;

use App\Models\Topup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopUpController extends Controller
{
    public function topup() {
        $user = Auth::guard('siswa')->user() ?? Auth::guard('guru')->user();
        $role = '';
        if (Auth::guard('siswa')->user()) {
            $role = 'siswa';
        } else {
            $role = 'guru';
        }

        $riwayats = Topup::where('user_id', '=', $user->id)->where('role', '=', $role)->where('type', '=', 'topup')->get();
        return view('Saldo.topup.create', compact('riwayats'));
    }

    public function store(Request $request, $role)
    {
        $user = Auth::guard('siswa')->user() ?? Auth::guard('guru')->user();
        Topup::create([
            'user_id' => $user->id,
            'role' => $role,
            'status' => 'belum konfirmasi',
            'amount' => $request->amount,
            'type' => 'topup',
        ]);
        return redirect()->route('Topup');
    }

    public function tarik() {
        $user = null;
        $role = null;
        if (Auth::guard('siswa')->user()) {
            $user = Auth::guard('siswa')->user();
            $role = 'siswa';
        } else if (Auth::guard('guru')->user()) {
            $user = Auth::guard('guru')->user();
            $role = 'guru';
        } else if (Auth::guard('pegawaikantin')->user()) {
            $user = Auth::guard('pegawaikantin')->user();
            $role = 'pegawaikantin';
        }

        $riwayats = Topup::where('user_id', '=', $user->id)->where('role', '=', $role)->where('type', '=', 'tarik')->get();

        return view('Saldo.tarik.create', compact('riwayats', 'user'));
    }

    public function storeTarik(Request $request, $role)
    {
        // $user = Auth::guard('siswa')->user() ?? Auth::guard('guru')->user() ?? Auth::guard('pegawaikantin')->user();

        $user = null;
        $role = null;
        if (Auth::guard('siswa')->user()) {
            $user = Auth::guard('siswa')->user();
            $role = 'siswa';
        } else if (Auth::guard('guru')->user()) {
            $user = Auth::guard('guru')->user();
            $role = 'guru';
        } else if (Auth::guard('pegawaikantin')->user()) {
            $user = Auth::guard('pegawaikantin')->user();
            $role = 'pegawaikantin';
        }

        Topup::create([
            'user_id' => $user->id,
            'role' => $role,
            'status' => 'belum konfirmasi',
            'amount' => $request->amount,
            'type' => 'tarik',
        ]);
        return redirect()->route('Tarik-saldo');
    }
}
