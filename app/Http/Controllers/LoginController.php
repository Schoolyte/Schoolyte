<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request)
    {
        if (Auth::attempt($request->only('UserID','password'))){
            return redirect()->route('Dashboard');
        }

        return redirect('Dashboard')->with('error');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
