<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\creacioncuenta;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\InventarioDatosController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\PorveedoresController;
use App\Http\Controllers\listaclienteController;
use App\Http\Controllers\listaproductosController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\nuevoproductoController;
use App\Http\Controllers\registrousuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[InicioController::class , 'index'])->name('index');
Route::get('/inventario', [inventarioDatosController::class, 'inventario']);
Route::get('/reporte' , [ReporteController::class, 'Reporte']);

Route::get('/proveedores', [PorveedoresController::class, 'Proveedores'])->name('proveedores');
Route::post('/proveedores', [PorveedoresController::class, 'store'])->name('proveedores.store');

Route::get('/registrocliente',[ClientesController::class, 'registrocliente']);
Route::post('/guardar-clientes',[ClientesController::class, 'almacenamientodatos']);
Route::get('/listaclientes',[listaclienteController::class, 'listaclientes'])->name('clientes.listaclientes');

Route::get('/login',[loginController::class, 'login']);
Route::post('/iniciosesion',[loginController::class, 'autenticacion'])->name('autenticacion');

Route::get('/registrousuario',[registrousuarioController::class, 'registrousuario']);
Route::post('/guardar-usuario',[registrousuarioController::class, 'guardarusuario']);

Route::get('/listaproducto',[listaproductosController::class, 'listaproducto']);
Route::get('/nuevoproducto',[nuevoproductoController::class, 'nuevoproducto']);
Route::post('/enviarproducto',[nuevoproductoController::class , 'registroproducto']);
