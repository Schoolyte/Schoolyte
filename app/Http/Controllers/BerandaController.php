<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('Beranda.Beranda');
    }

    public function berita()
    {
        return view('Berita.Hal_utama');
    }

}
