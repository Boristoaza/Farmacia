<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function login(){
        return view('Login.login');
    }

    public function autenticacion(Request $request){
        //validacion de campos
        $comprobacion = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //buscar al usuario por email
        $usuario = User::where('email', $comprobacion['email'])->first();
        
        if($usuario && Hash::check($comprobacion['password'], $usuario->password)){
            //crendenciales validas autentica al usuario el login es el metodo propio de laravel para autenticar
            FacadesAuth::login($usuario);
            //redirigir a la siguiente pantalla si esta todo correcto
            return redirect('/index');
        }
        return back()->withErrors(['email' => 'credenciales incorrectas']);
    }
}

