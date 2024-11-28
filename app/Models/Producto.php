<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $fillable = [
        'nombre_producto'
        ,'categoria'
        ,'cantidad_stock'
        ,'precio_compra'
        ,'precio_venta'
        ,'proveedor' ];
}
