<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function penilaian()
    {
        return view('Penilaian.Penilaiansiswa1');
    }
}
