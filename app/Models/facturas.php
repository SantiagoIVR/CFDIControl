<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facturas extends Model
{
    use HasFactory;
    protected $fillable=['idf','folio','emision','vencimiento','monto','cliente','id_status'];
}
