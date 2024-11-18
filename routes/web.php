<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\InventarioDatosController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index',[InicioController::class , 'index'])->name('index');
Route::get('/inventario', [inventarioDatosController::class, 'inventario']);
