<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;
use App\Models\WaliSiswa;
use Illuminate\Http\Request;
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
    }


    public function logout()
    {
        $this->removeAuth();
        return redirect()->route('Beranda/Beranda');
    }
}
