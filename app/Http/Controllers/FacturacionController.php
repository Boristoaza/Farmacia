<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    public function facturacion(){
        return view('Facturacion.facturacion');
    }
}
