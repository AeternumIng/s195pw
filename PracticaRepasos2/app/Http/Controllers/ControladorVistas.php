<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function principal(){
        return view('principal');
    }
    public function registro(){
        return view('registro');
    }
}
