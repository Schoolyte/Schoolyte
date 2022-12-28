<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MutasiKeluar;
use App\Models\FormMutasi;

class MutasiKeluarController extends Controller
{
    public function mutasikeluar()
    {
        return view('Mutasi.MutasiKeluar');
    }

    public function formmutasikeluar()
    {
        return view('Mutasi.FormMutasi');
    }

    public function store(Request $request)
    {

        FormMutasi::create($request->except(['_token']));
        return redirect('Mutasi/MutasiKeluar');
    }

}
