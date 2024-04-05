<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class miperfilcontroller extends Controller {

    /* ---FUNCIÓN PARA MOSTRAR LA VENTANA "Mi Perfil"--- */
    public function showmiperfil() {
        
        return view ('miperfil.miperfil');
    }
    public function showseguridad() {
        
        return view ('miperfil.seguridad');
    }
    
}