<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function Reporte(){
        return view('Reporte.Reporte');
    }
}
