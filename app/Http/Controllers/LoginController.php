<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Guru;
use App\Models\Pegawai;
use App\Models\PegawaiKantin;
use App\Models\Siswa;
use App\Models\User;
use App\Models\WaliSiswa;
use Illuminate\Http\Request;
use App\Models\PegawaiPerpustakaan;

use Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request)
    {
        $this->removeAuth();

        // search admin
        $admin = Admin::where('email', $request->id)->first();
        if($admin){
            if($admin->pass == $request->password) {
                Auth::guard('admin')->login($admin);
                return redirect()->route('Dashboard');
            }
        }

        // search siswa
        $siswa = Siswa::where('email', $request->id)->first();
        if($siswa){
            if($siswa->pass == $request->password) {
                Auth::guard('siswa')->login($siswa);
                return redirect()->route('Dashboard');
            }
        }

        // search guru
        $guru = Guru::where('email', $request->id)->first();
        if($guru){
            if($guru->pass == $request->password) {
                Auth::guard('guru')->login($guru);
                return redirect()->route('Dashboard');
            }
        }

        // search wali murid
        $wali = WaliSiswa::where('email', $request->id)->first();
        if($wali){
            if($wali->pass == $request->password) {
            Auth::guard('walisiswa')->login($wali);
                return redirect()->route('Dashboard');
            }
        }

        // search pegawai
        $pegawai = Pegawai::where('email', $request->id)->first();
        if($pegawai){
            if($pegawai->pass == $request->password) {
                Auth::guard('pegawai')->login($pegawai);
                return redirect()->route('Dashboard');
            }
        }

        // search pegawai kantin
        $pegawaikantin = PegawaiKantin::where('email', $request->id)->first();
        if($pegawaikantin){
            if($pegawaikantin->pass == $request->password) {
                Auth::guard('pegawaikantin')->login($pegawaikantin);
                return redirect()->route('Dashboard');
            }
        }



        // search Pegawai Perpus
        $pegawaiPerpus = PegawaiPerpustakaan::where('email', $request->id)->first();
        if ($pegawaiPerpus) {
            if ($pegawaiPerpus->pass == $request->password) {
                Auth::guard('pegawaiPerpus')->login($pegawaiPerpus);
                return redirect()->route('Dashboard');
            }
        }

        return redirect()->route('Login')->with('error', 'Email atau Password salah');
    }

    public function removeAuth() {
        try {
            Auth::logout();
        } catch (\Throwable $th) {}
        try {
            Auth::guard('admin')->logout();
        } catch (\Throwable $th) {}
        try {
            Auth::guard('guru')->logout();
        } catch (\Throwable $th) {}
        try {
            Auth::guard('walisiswa')->logout();
        } catch (\Throwable $th) {}
        try {
            Auth::guard('pegawai')->logout();
        } catch (\Throwable $th) {}
        try {
            Auth::guard('pegawaikantin')->logout();
        } catch (\Throwable $th) {}
    }


    public function logout()
    {
        $this->removeAuth();
        return redirect()->route('Beranda/Beranda');
    }
}
