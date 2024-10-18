<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepasoController extends Controller
{
    public function inicio(){
        return view('Portada');
    }
    public function Repaso1(){
        return view('repaso1');
    }
}
