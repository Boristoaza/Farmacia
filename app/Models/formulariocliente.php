<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formulariocliente extends Model
{
    use HasFactory;
    
    protected $table='registroclientes';
    protected $fillable=['ruc','nombre','apellido','correo','telefono','direccion'];
}
