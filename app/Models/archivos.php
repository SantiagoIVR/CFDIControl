<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class archivos extends Model
{
    use HasFactory;
    protected $primarykey='ida';
    protected $fillable=['ida','nom_arch','folio','idu','idta'];
}
