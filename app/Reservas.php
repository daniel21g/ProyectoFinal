<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    protected $fillable = ['user_id','personas_reserva', 'fecha_reserva', 'hora_reserva'];
}