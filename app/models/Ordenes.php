<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Ordenes extends Model
{
    protected $fillabel = [
        'cliente_id','producto_id','cantidad','precio_total','estado_orden','fecha_origen'
    ];
}
