<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class finanzascontroller extends Controller {

    public function showcfdistatus() {
        
        return view ('misfinanzas.estatuscfdi_all');
    }

    public function showcfdipay() {
        
        return view ('misfinanzas.estatuscfdi_pay');
    }
    
}