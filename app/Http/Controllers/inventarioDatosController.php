<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Producto};
use GuzzleHttp\Promise\Create;
use Symfony\Contracts\Service\Attribute\Required;
use Termwind\Components\Dd;

use function Laravel\Prompts\select;

class inventarioDatosController extends Controller
{
    public function inventario() {
        $productos = Producto::all();
        return view('Inventario.inventarioDatos' , ['Producto' => $productos]);
    }
    public function buscadorInventario(Request $request){
        $dato = $request->BuscadorInventario;

        if (isset($dato)) {
            $queryBuscadorInventario = Producto::select([
                'nombre_producto'
                ,'categoria'
                ,'cantidad_stock'
                ,'precio_compra'
                ,'precio_venta'
                ,'proveedor' ])->where('nombre_producto', $dato )->get();
                return response()->json(['array' => $queryBuscadorInventario]);
        } else {
            $queryBuscadorInventario =Producto::all();
                return response()->json(['array' => $queryBuscadorInventario]);
        }
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

    public function agregarProductoInventario(Request $request)
    {
        // Validar los datos del request
        $request->validate([
            'nombre_producto' => 'required|max:250',
            'categoria' => 'required|max:250',
            'cantidad_stock' => 'required|numeric',
            'precio_compra' => 'required|numeric',
            'precio_venta' => 'required|numeric',
            'proveedor' => 'required|max:250',
        ]);

        // Crear el producto en la base de datos
        $query = Producto::create($request->only([
            'nombre_producto',
            'categoria',
            'cantidad_stock',
            'precio_compra',
            'precio_venta',
            'proveedor',
        ]));

        // Retornar una respuesta JSON
        return response()->json([
            'message' => 'Producto registrado correctamente',
            'producto' => $query,
        ]);
    }

}