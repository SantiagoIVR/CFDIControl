<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class menucontroller extends Controller {

    /* ---FUNCIÓN PARA MOSTRAR LA VENTANA MENU--- */
    public function index() {
        
        return view ('inicio');
    }
    
}