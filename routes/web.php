<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pruebascontroller;
use App\Http\Controllers\CFDIController;
use App\Http\Controllers\menucontroller;
use App\Http\Controllers\miperfilcontroller;
use App\Http\Controllers\ingresoscontroller;
use App\Http\Controllers\finanzascontroller;
Route::get('/', function () {
    return view('welcome');
});







/* INICIO */
Route::get('index',[menucontroller::class,'index'])->name('index');
Route::get('descargarManualUsuario', [menucontroller::class, 'descargarManualUsuario'])->name('descargarManualUsuario');
Route::get('descargarManualTecnico', [menucontroller::class, 'descargarManualTecnico'])->name('descargarManualTecnico');
Route::get('descargarLicencia', [menucontroller::class, 'descargarLicencia'])->name('descargarLicencia');

/* MI PERFIL */
Route::get('showmiperfil',[miperfilcontroller::class,'showmiperfil'])->name('showmiperfil');
Route::get('showseguridad',[miperfilcontroller::class,'showseguridad'])->name('showseguridad');

/* MIS FINANZAS */
Route::get('showcfdistatus',[finanzascontroller::class,'showcfdistatus'])->name('showcfdistatus');
Route::get('showcfdipay',[finanzascontroller::class,'showcfdipay'])->name('showcfdipay');

/* INGRESOS */
Route::get('showmingresos',[ingresoscontroller::class,'showmingresos'])->name('showmingresos');
Route::get('nuevoingreso',[ingresoscontroller::class,'nuevoingreso'])->name('nuevoingreso');




Route::get('autoregistro',[CFDIController::class,'autoregistro'])->name('autoregistro');
Route::POST('guardar',[CFDIController::class,'guardar'])->name('guardar');

Route::get('recuperar',[CFDIController::class,'recuperar'])->name('recuperar');


Route::GET('loginView', [CFDIController::class, 'loginView'])->name('loginView');
Route::POST('login', [CFDIController::class, 'login'])->name('login');

