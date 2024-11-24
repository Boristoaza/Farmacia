<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PorveedoresController extends Controller
{
    public function Proveedores(){
        return view('Proveedores.proveedores');
    }
}
