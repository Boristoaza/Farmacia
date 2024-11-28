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
}
