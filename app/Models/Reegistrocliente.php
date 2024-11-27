<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reegistrocliente extends Model
{
    use HasFactory;
    //tabla a donde deben ir 
    protected $table = 'reegistroclientes';
    //campos que se pueden guardar masivamente
    protected $fillable = ['ruc','nombre','apellido','correo','telefono','direccion'];
}
