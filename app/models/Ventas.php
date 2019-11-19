<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $fillabel = [
        'orden_id','fecha_venta','monto_total'
    ];
}
