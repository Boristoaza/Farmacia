<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VentasDiaController extends Controller
{
    public function ventasDelDia(){
        return view('inventario.ventaDia');
    }
}
