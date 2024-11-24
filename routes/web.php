<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\InventarioDatosController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\PorveedoresController;

use App\Http\Controllers\listaclienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('welcome');
 });
Route::get('/index',[InicioController::class , 'index'])->name('index');
Route::get('/inventario', [inventarioDatosController::class, 'inventario']);
Route::get('/reporte' , [ReporteController::class, 'Reporte']);
Route::get('/proveedores',[PorveedoresController::class, 'Proveedores']);
Route::get('/registrocliente',[ClientesController::class, 'registrocliente']);
Route::get('/listaclientes',[listaclienteController::class, 'listaclientes']);
