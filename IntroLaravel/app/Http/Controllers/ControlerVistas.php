<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorCliente;

class ControlerVistas extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('clientes');
    }

    public function procesarCliente(Request $peticion) // Asegúrate de especificar 'Request'
    {
        // Validación de datos
        $validacion = $peticion->validate([
            'txtnombre' => 'required|min:5|max:20',
            'txtapellido' => 'required|min:8|max:20',
            'txtcorreo' => 'required|email:rfc,dns',
            'txttelefono' => 'required|numeric',
        ]);

        // Asignación de la variable y redireccion con mensaje en sesión
        $usuario = $peticion->input('txtnombre');
        session()->flash('exito', 'Se guardó el usuario: ' . $usuario);

        return to_route('rutaformulario'); // Asegúrate de que esta ruta esté definida
    }
}
