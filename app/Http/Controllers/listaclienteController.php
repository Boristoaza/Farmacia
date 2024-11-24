<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class listaclienteController extends Controller
{
    public function listaclientes(){
        return view('Cliente.listacliente');
    }
}
