<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Divisa extends Model
{
    protected $fillable = [
        'name',
        'symbol',       
        'exchange_rate'
    ];
}
