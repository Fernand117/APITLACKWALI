<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $fillable = [
        'nombre','paterno','materno','edad','imagen', 'user_id'
    ];
}
