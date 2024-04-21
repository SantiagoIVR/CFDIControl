<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class recuperarcontroller extends Controller
{
    public function recuperar()
    {
        return view('recuperar');
    }

    public function validar(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'correo' => 'required|email',
            'fecha_nac' => 'required|date',
        ]);
    
        // Buscar un usuario con el correo y la fecha de nacimiento proporcionados
        $usuario = usuarios::where('correo', $request->correo)
                            ->where('fecha_nac', $request->fecha_nac)
                            ->first();
    
        // Verificar si se encontró un usuario con esos datos
        if ($usuario) {
            // Mostrar una pantalla emergente con el nombre de usuario y la contraseña
            return view('mostrar_contrasena', ['usuario' => $usuario]);
        } else {
            // Si no se encontró un usuario, mostrar un mensaje de error
            return back()->with('error', 'El correo electrónico o la fecha de nacimiento son incorrectos.');
        }
    }
}
