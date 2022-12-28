<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tambahberita;

class TambahberitaController extends Controller
{
    public function store(Request $request)
    {

        Tambahberita::create($request->except(['_token']));
        return redirect('Dashboard');
    }
}
