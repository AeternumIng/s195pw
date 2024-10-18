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
    public function mgconversion(Request $conversiones){
        $numero= $conversiones->numero;
        $resultado = $numero/1024;
        return view('repaso1', ['mgconversion' => $resultado]);
    }
    public function gmconversion(Request $conversiones){
        $numero= $conversiones->numero;
        $resultado = $numero*1024;
        return view('repaso1', ['gmconversion' => $resultado]);
    }
    public function gtconversion(Request $conversiones){
        $numero= $conversiones->numero;
        $resultado = $numero/1024;
        return view('repaso1', ['gtconversion' => $resultado]);
    }
    public function tgconversion(Request $conversiones){
        $numero= $conversiones->numero;
        $resultado = $numero*1024;
        return view('repaso1', ['tgconversion' => $resultado]);
    }
}