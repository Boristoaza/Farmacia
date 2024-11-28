<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{ProveedorModel};
use Illuminate\Http\Request;

class PorveedoresController extends Controller
{
    public function Proveedores(){
        return view('Proveedores.proveedores');
    }
    // esta funcion valida los datos
    public function store( Request $request){
        $request->validate([
            'nombre_de_la_empresa'=>'required|string|max:250',
            'tipo_proveedor'=>'required|string|max:250',
            'ruc'=>'required|string|max:200',
            'telefono'=>'required|string|max:200',
            'email'=>'required|string|max:200',
            'direccion'=>'required|string|max:255',
            'cuenta_bancaria'=>'required|string|max:240',
            'banco'=>'required|string|max:240',
            'tipo_cuenta'=>'required|string|max:200',
            'condiciones_pago'=>'required|string|max:200',
        ]);
        ProveedorModel::create($request->all());

        return redirect()->route('proveedores')->with('exito', 'El proveedor se registró con éxito');
    }
}
