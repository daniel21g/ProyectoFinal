<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    protected $fillable = ['image','titulo', 'descripcion', 'costo'];
}
