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
        /*user where usa el modelo para realizar una consulta asociada a la tabla por defecto
        users, la clausula where filtra registro que tiene el campo email y first devuelve
        el primer registro que coincida*/
        //los corchetes permiten acceder al valor asociado como clave

        $usuario = User::where('email', $comprobacion['email'])->first();
        
        if($usuario && Hash::check($comprobacion['password'], $usuario->password)){
            /*hash::check desencripta la contraseña almacenada 
            y verifica si coincide con la ingresada.*/
            // facadesauth ::login Es el método de autenticación propio de Laravel.
            FacadesAuth::login($usuario);
            //redirigir a la siguiente pantalla si esta todo correcto
            return redirect('/index');
        }
        return back()->withErrors(['email' => 'credenciales incorrectas']);
    }
}

