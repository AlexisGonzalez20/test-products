<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrecioProducto extends Model
{
    protected $fillable = [
        'product_id',
        'currency_id',
        'price'
    ];

    protected $table = 'precios_productos'; 
}
