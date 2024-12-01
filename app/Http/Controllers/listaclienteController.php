<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\formulariocliente;
use Illuminate\Http\Request;

class listaclienteController extends Controller
{
    public function listaclientes(){
        //obtener los datos de la base de datos con el modelo
        $clientes = formulariocliente::all();
        return view('Cliente.listacliente',compact('clientes'));
    }
}
