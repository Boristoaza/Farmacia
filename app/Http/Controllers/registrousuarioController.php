<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\registrousuario;
use Illuminate\Http\Request;

class registrousuarioController extends Controller
{
    public function registrousuario(){
        return view('Registrousuario.registrousuario');
    }
    public function guardarusuario(Request $request){
        $almacenador = $request -> validate([
            'nombre' =>  'required|max:50',
            'apellido' => 'required|max:50',
            'correo' => 'required|max:100',
            'contrasena' => 'required|max:100',
        ]);
        registrousuario::create($almacenador);
        return redirect('/registrousuario')->with('');
    }

}
