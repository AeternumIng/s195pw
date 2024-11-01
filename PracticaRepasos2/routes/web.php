<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;



Route::get('/',[ControladorVistas::class,'principal'])->name('rutaprincipal');
Route::get('/registro',[ControladorVistas::class,'registro'])->name('rutaregistro');
Route::post('/guardarlibro',[ControladorVistas::class,'guardarlibro'])->name('rutarlibro');
