<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registrousuarioController extends Controller
{
    public function registrousuario(){
        return view('Registrousuario.registrousuario');
    }
}
