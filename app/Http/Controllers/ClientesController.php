<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\formulariocliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function registrocliente(){
        return view('Cliente.clientes');
    }
    public function almacenamientodatos(Request $request){
        $validacion = $request->validate([
            'ruc'=> 'required|max:13',
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|max:14',
            'direccion' => 'required|max:500',
        ]);
        formulariocliente::create($validacion);
        return redirect('/registrocliente')->with('usuario registrado con exito');

    }
}
