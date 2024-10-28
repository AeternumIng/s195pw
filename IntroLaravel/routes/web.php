<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlerVistas;

Route::view('/component','componentes')->name('rutaComponent'); 

Route::get('/',[ControlerVistas::class,'home']) ->name('rutaInicio');
Route::get('/form',[ControlerVistas::class,'formulario']) ->name('rutaForm');
Route::get('/consultar',[ControlerVistas::class,'consulta']) ->name('rutaClientes');
Route::get('/formulario', [ControlerVistas::class, 'formulario'])->name('rutaformulario');

Route::post('/enviarCliente',[ControlerVistas::class,'ProcesarCliente']) ->name('rutaProcesar');