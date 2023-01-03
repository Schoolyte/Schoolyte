<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MutasiMasuk;

class MutasiMasukController extends Controller
{
    public function index()
    {
        return view('Beranda.Mutasimasuk');

    }

    public function store(Request $request)
    {
        MutasiMasuk::create($request->except(['_token']));
        return redirect('Beranda/MutasiMasuk2');
    }

}
