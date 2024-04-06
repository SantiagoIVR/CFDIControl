<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Session;
use App\Models\usuarios;

class CFDIController extends Controller
{
    //
    public function autoregistro()
    {
        return view('autoregistro');
    }

    public function guardar(Request $request) 
    {
        $validatedData = $request->validate([    
            'nombre'=>'required|regex:/^[A-Z][A-Z,a-z, ,ó,é,ü,ñ,Ñ]+$/|min:3|max:30',
            'correo'=>'email|min:15|max:40',
            'fecha_nac'=>'required|date',
            'nomb_u'=>'required|min:3|max:30',
            'contraseña'=>'required|min:8|max:12',
     
        ]);
        return redirect()->route('index');
    }
    public function recuperar()
    {
        return view('recuperar');
    }



    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $usuario_correo = $request->input('usuario_correo');
        $contraseña = $request->input('contraseña');
        
        // Buscar al usuario por nombre de usuario o correo electrónico
        $usuario = usuarios::where('nomb_u', $usuario_correo)
                           ->orWhere('correo', $usuario_correo)
                           ->first();
    
        if ($usuario) {
            // Si se encontró al usuario, verificar la contraseña
            if ($contraseña === $usuario->contraseña) {
                // Si la contraseña es correcta, iniciar sesión
                Auth::login($usuario);
                $request->session()->put('nombre', Auth::user()->nombre);
                //Session::flash('mensaje', 'Ha ingresado correctamente');
                return redirect()->route('inicio');
            } else {
                // Si la contraseña es incorrecta
                Session::flash('mensaje', 'La contraseña es incorrecta, intentalo de nuevo.');
                return back();
            }
        } else {
            // Si el usuario no existe
            Session::flash('mensaje', 'El usuario no existe, verifica los datos ingresados e intentalo nuevamente.');
            return back();
        }
    }
}
