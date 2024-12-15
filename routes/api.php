<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PorveedoresController;
use App\Http\Controllers\inventarioDatosController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/hola', function () {
    return response()->json(['mensaje' => 'Hola Mundo']);
});


Route::post('/proveedor/buscar', [PorveedoresController::class, 'BuscarPorveedor'])->name('proveedor.BuscarPorveedor');
Route::post('inventario/buscador' , [inventarioDatosController::class, 'buscadorInventario'])->name('donde.estaMiInventario');
Route::post('inventario/eliminar', [inventarioDatosController::class , 'eliminarElementoIventario'] )->name('eliminar.dato');


Route::post('inventario/agregar' , [inventarioDatosController::class ,'agregarProductoInventario'])->name('agregar.Inventario');