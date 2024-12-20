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
    public function buscarcliente(Request $request){
        $query = $request->input('query');
        $buscarpersona = formulariocliente::where('nombre', 'LIKE' , "%{$query}%")->get();
        return response()->json($buscarpersona);

    }
}
