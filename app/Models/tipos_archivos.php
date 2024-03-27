<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos_archivos extends Model
{
    use HasFactory;
    protected $primarykey='idta';
    protected $fillable=['idta','nomb_tipo'];
}
