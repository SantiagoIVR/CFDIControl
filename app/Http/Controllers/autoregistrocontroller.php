<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class autoregistrocontroller extends Controller
{
    public function autoregistro()
    {
        return view('autoregistro');
    }

    public function guardarregistro(Request $request)
    {
        // Validación de los datos de entrada
        $validatedData = $request->validate([    
            'nombre'=>'required|regex:/^[A-Z][A-Z,a-z, ,á,í,ó,é,ü,ñ,Ñ]+$/|min:3|max:30',
            'correo'=>'required|email|min:15|max:40',
            'fecha_nac'=>'required|date',
            'nomb_u'=>'required|min:3|max:30',
            'contraseña'=>'required|min:8|max:12',
        ]);
    
        // Verificar si es el primer usuario registrado
        if (usuarios::count() === 0) {
            $request->merge(['rol' => 'administrador']);
        } else {
            $request->merge(['rol' => 'usuario']);
        }
    
        // Crear el nuevo usuario en la base de datos
        usuarios::create($request->all());
    
        // Redireccionar a la pagina de inicio
        return redirect()->route('index');
    }
}
