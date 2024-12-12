<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reegistrocliente;
use Illuminate\Http\Request;

class listaclienteController extends Controller
{
    public function listaclientes(){
        //recuperar todo los datos del modelo , la variable dato_cliente contiene todo el registro
        //reegistrolcliente es el nombre del modelo
        $dato_cliente = Reegistrocliente::all();
        return view('Cliente.listacliente',compact('dato_cliente'));
    }
}
