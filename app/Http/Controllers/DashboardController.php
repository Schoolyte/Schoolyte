<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('Dashboard');
    }

    public function beritasaya()
    {
        return view('Berita/Beritasaya');
    }

    public function tambahberita()
    {
        return view('Berita/Tambahberita');
    }

    public function strukturorganisasi()
    {
        return view('Strukturorganisasi');
    }
}
