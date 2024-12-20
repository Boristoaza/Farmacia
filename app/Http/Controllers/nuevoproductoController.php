<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\gestionproducto;
use Illuminate\Http\Request;

class nuevoproductoController extends Controller
{
    public function nuevoproducto(){
        return view('Gestionproducto.nuevoproducto');
    }
    public function registroproducto(Request $request){

        $productos = $request->validate([
            'codigo' => 'required|max:10',
            'nombreproducto' => 'required|max:100',
            'descripcion'  => 'required|max:800',
            'precio' => 'required|max:20',
            'stock' => 'required|max:20',
            'opciones' => 'required',
            'creacion' => 'required',
            'estado' => 'required',
        ]);

        gestionproducto::create($productos);
        return redirect('/nuevoproducto');
    }
}
