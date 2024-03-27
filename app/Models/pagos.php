<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{
    use HasFactory;
    protected $primarykey='no_pago';
    protected $fillable=['no_pago','monto','fecha','id_tp','id_fac'];
}
