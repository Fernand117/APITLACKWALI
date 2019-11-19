<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillabel = [
        'nombre','descripcion','precio','imagen','status','categoria_id'
    ];
}
