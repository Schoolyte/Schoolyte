<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function pendaftaran()
    {
        return view('Beranda.Pendaftaran');
    }

    public function store(Request $request)
    {

        Pendaftaran::create($request->except(['_token']));
        return redirect('Beranda/Pendaftaran2');
    }
}
