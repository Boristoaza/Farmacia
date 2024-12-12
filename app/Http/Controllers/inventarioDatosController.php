<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Producto};
use function Laravel\Prompts\select;

class inventarioDatosController extends Controller
{
    public function inventario() {
        $productos = Producto::all();
        return view('Inventario.inventarioDatos' , ['Producto' => $productos]);
    }
    public function buscadorInventario(Request $request){
        $dato = $request->BuscadorInventario;

        $queryBuscadorInventario = Producto::select([
            'nombre_producto'
            ,'categoria'
            ,'cantidad_stock'
            ,'precio_compra'
            ,'precio_venta'
            ,'proveedor' ])->where('nombre_producto', $dato )->get();

            return response()->json([
                'datos del query realizado'=> $queryBuscadorInventario
            ]);
    }
    public function eliminarElementoIventario(Request $request){

        $dato = $request-> eliminarDatoInventario;

        $queryEliminarElemnto = Producto::select([
            'nombre_producto'
            ,'categoria'
            ,'cantidad_stock'
            ,'precio_compra'
            ,'precio_venta'
            ,'proveedor'])->where('nombre_producto',$dato)->delete();

            return response()->json([
                'los datos se eliminaron con exito' => $queryEliminarElemnto
            ]);
    }
}
