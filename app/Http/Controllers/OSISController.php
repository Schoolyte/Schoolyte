<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OSISController extends Controller
{
    public function osis()
    {
        return view('OSIS.OSIS');
    }

    public function divisihumas()
    {
        return view('OSIS.Divisi_humas');
    }
}
