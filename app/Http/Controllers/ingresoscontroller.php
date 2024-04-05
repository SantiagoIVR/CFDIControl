<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ingresoscontroller extends Controller {

    public function showmingresos() {
        
        return view ('ingresos.consultaingresos');
    }

    public function nuevoingreso() {
        
        return view ('ingresos.registroingresos');
    }
    
}