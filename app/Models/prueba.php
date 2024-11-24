<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class prueba extends Model
{
    protected $table = 'ciudades';
    protected $fillable = ['id' , 'nombre' , 'pais_id'];
}
