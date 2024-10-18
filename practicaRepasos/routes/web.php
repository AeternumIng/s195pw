<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepasoController;

Route::get('/', [RepasoController::class, 'inicio'])->name('inicio');

Route::get('/repaso1', [RepasoController::class, 'repaso1'])->name('Conversiones');

Route::post('/mg',[RepasoController::class, 'mgconversion'])->name('rutamg');
Route::post('/gm',[RepasoController::class, 'gmconversion'])->name('rutagm');
Route::post('/gt',[RepasoController::class, 'gtconversion'])->name('rutagt');
Route::post('/tg',[RepasoController::class, 'tgconversion'])->name('rutatg');

