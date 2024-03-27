<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos_pagos extends Model
{
    use HasFactory;
    protected $primarykey='idtp';
    protected $fillable=['idtp','tipo'];
}
