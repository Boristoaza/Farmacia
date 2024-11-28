<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProveedorModel extends Model
{
    protected $table = 'proveedore';
    protected $fillable = [
        'nombre_de_la_empresa',
        'tipo_proveedor',
        'ruc',
        'telefono',
        'email',
        'direccion',
        'cuenta_bancaria',
        'banco',
        'tipo_cuenta',
        'condiciones_pago',
    ];
}
