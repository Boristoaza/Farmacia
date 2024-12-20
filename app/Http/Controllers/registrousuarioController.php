<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\registrousuario;
use App\Models\User;
use Illuminate\Http\Request;

class registrousuarioController extends Controller
{
    public function registrousuario(){
        return view('Registrousuario.registrousuario');
    }
    public function guardarusuario(Request $request){
        $almacenador = $request -> validate([
            'name' =>  'required|max:50',
            'apellido' => 'required|max:50',
            'email' => 'required|max:100',
            'password' => 'required|max:100',
        ]);
        User::create($almacenador);
        return redirect('/registrousuario')->with('');
    }

}
