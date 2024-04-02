<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class usuarios extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'idu';

    protected $fillable = [
        'nomb_u', 'contraseña', 'nombre', 'apellidos', 'fecha_nac', 'correo',
    ];
}
