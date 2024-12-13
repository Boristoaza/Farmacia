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
    public function busqueda(Request $request){
        //obtener el valor del query del objeto request del formulario
        $query = $request->input('query');
        //like permite buscar coincidencias parciales
        $buscarproducto = gestionproducto::where('nombreproducto', 'LIKE', "%{$query}%")->get();
        //retorna los resultados de la busqueda en formato json
        return response()->json($buscarproducto);

    }
}
