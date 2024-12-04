<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrousuario extends Model
{
    use HasFactory;

    protected $table ='registrousuarios';
    protected $fillable = ['nombre','apellido','correo','contrasena'];

}
