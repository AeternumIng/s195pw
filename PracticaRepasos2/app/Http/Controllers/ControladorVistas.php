<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarLibro;

class ControladorVistas extends Controller
{
    public function principal(){
        return view('principal');
    }
    public function registro(){
        return view('registro');
    }
    public function guardarlibro(ValidarLibro $peticion){
        $libro = $peticion->input ('Titulo');
        session()->flash ('Exito','Se guardo el libro correctamente:  ' .$libro);
        return to_route('rutaregistro');


    }


}
