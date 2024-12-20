<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reegistrocliente;
use App\Models\formulariocliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function mostrarformulario(){
        return view('Cliente.clientes');
    }

    public function registrocliente(Request $request){
        $validaciones = $request->validate([
            'ruc' => 'required|max:13',
            'nombre' => 'required|max:100',
            'apellido' =>'required|max:100',
            'correo' => 'required|email|max:100',
            'telefono' => 'required|max:10',
            'direccion' => 'required|max:100',
        ]);

        // Crea el registro usando los datos validados
        Reegistrocliente::create($validaciones);

        return redirect()->back()->with('success','Usuario registrado exitosamente');
    }

    public function almacenamientodatos(Request $request){
        $validacion = $request->validate([
            'ruc'=> 'required|max:13',
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|max:14',
            'direccion' => 'required|max:500',
        ]);

        // Crea el registro usando los datos validados
        formulariocliente::create($validacion);

        return redirect('/registrocliente')->with('success', 'Usuario registrado con éxito');
    }
}
