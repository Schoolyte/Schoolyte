<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    public function ekskul(){

        return view('Ekstra.Ekskul');
    }
}
