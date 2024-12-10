<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\gestionproducto;
use Illuminate\Http\Request;

class listaproductosController extends Controller
{
    public function listaproducto(){

        $producto=gestionproducto::all();
        return view('Gestionproducto.listaproducto',compact('producto'));
        
    }
}
