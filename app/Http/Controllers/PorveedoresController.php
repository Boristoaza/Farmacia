<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{ProveedorModel};
use Illuminate\Http\Request;

class PorveedoresController extends Controller
{
    public function Proveedores(){
        $datos = ProveedorModel::all();
        return view('Proveedores.proveedores' , [ 'Datos' => $datos ]);
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

    public function BuscarPorveedor(Request $request)
    {
        $datos = $request->buscarProveedor;

        if (empty($datos)) {
            $queryBuscadorProveedor = ProveedorModel::all();
        } else {
            $queryBuscadorProveedor = ProveedorModel::select('nombre_de_la_empresa', 'tipo_proveedor' , 'ruc'
                                                             , 'telefono' , 'email' , 'direccion', 'direccion'
                                                              , 'cuenta_bancaria','banco' , 'tipo_cuenta' ,'condiciones_pago'  )

                                                     ->where('nombre_de_la_empresa', 'LIKE', '%' . $datos . '%')
                                                     ->get();
            // Si no hay resultados, retorna todos los datos
            if ($queryBuscadorProveedor->isEmpty()) {
                $queryBuscadorProveedor = ProveedorModel::all();
            }
        }

        return response()->json($queryBuscadorProveedor);
    }

}
