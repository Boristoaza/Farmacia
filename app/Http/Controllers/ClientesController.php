<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reegistrocliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function mostrarformulario(){
        return view('Cliente.clientes');
    }

    public function registrocliente(Request $request){
        $validaciones = $request->validate([
            'ruc' => 'required|max:13',
            'nombre' => 'required|max:100',
            'apellido' =>'required|max:100',
            'correo' => 'required|email|max:100',
            'telefono' => 'required|max:10',
            'direccion' => 'required|max:100',
        ]);
        Reegistrocliente::create($validaciones);
        return redirect()->back()->with('success','usuario registrado exitosamente');
        
    }
}
