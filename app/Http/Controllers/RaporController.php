<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RaporController extends Controller
{
    public function rapor()
    {
        return view('Rapor.RaporSiswa');
    }

    public function raporganjil()
    {
        return view('Rapor.RaporGanjil');
    }

    public function raporgenap()
    {
        return view('Rapor.RaporGenap');
    }
}
