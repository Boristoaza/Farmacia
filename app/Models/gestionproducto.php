<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gestionproducto extends Model
{
    use HasFactory;

    protected $table ='gestionproductos';
    protected $fillable=['codigo','nombreproducto','descripcion','precio','stock','opciones','creacion','estado'];

}
