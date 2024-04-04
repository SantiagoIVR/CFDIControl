<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CFDIController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('autoregistro',[CFDIController::class,'autoregistro'])->name('autoregistro');


Route::get('inicio', [CFDIController::class, 'inicio'])->name('inicio');
Route::GET('loginView', [CFDIController::class, 'loginView'])->name('loginView');
Route::POST('login', [CFDIController::class, 'login'])->name('login');
