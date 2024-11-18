<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        $user =[
            'name' => 'Saul Toaza',
            'role' => 'administrador'
        ];
        return view('index',compact('user'));
    }
}
