<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{prueba};
use function Laravel\Prompts\select;



class inventarioDatosController extends Controller
{
    public function inventario() {
        $ciudades = prueba::all();
        return view('Inventario.inventarioDatos' , ['prueba' => $ciudades]);
    }
}
