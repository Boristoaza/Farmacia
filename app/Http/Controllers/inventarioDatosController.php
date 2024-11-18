<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class inventarioDatosController extends Controller
{
    public function inventario() {
        return view('Inventario.inventarioDatos');
    }
}
