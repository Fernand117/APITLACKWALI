<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = [
        'nombre', 'imagen', 'status'
    ];
}
