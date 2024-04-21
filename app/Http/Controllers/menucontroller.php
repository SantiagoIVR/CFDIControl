<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class menucontroller extends Controller {

    /* ---FUNCIÓN PARA MOSTRAR LA VENTANA MENU--- */
    public function index() {
        
        return view ('inicio');
    }

    /* --- DESCARGAR MANUALES Y LICENCIA --- */
    public function descargarManualUsuario()
{
    $pathToFile = public_path('archivos/documentos/manual_usuario.pdf');
    $nombreArchivo = 'manual_usuario.pdf';
    return response()->download($pathToFile, $nombreArchivo);
}

public function descargarManualTecnico()
{
    $pathToFile = public_path('archivos/documentos/manual_tecnico.pdf');
    $nombreArchivo = 'manual_tecnico.pdf';
    return response()->download($pathToFile, $nombreArchivo);
}

public function descargarLicencia()
{
    $pathToFile = public_path('archivos/documentos/licencia.pdf');
    $nombreArchivo = 'licencia.pdf';
    return response()->download($pathToFile, $nombreArchivo);
}

    
}