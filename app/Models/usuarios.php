<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $primaryKey = 'idu'; 
    protected $fillable = ['nomb_u', 'contraseña', 'nombre', 'fecha_nac', 'correo', 'rol']; // Agrega 'rol' a los fillables

    // Sobreescribe el método boot para asignar el rol "administrador" al primer registro creado
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($usuario) {
            // Verifica si no hay ningún registro en la tabla
            if (usuarios::count() === 0) {
                // Si es el primer registro, establece el rol como "administrador"
                $usuario->rol = 'administrador';
            } else {
                // Si hay registros en la tabla, el rol será "usuario" por defecto
                $usuario->rol = 'usuario';
            }
        });
    }
}