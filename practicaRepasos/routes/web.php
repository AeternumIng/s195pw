<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepasoController;

Route::get('/', [RepasoController::class, 'inicio'])->name('inicio');

Route::get('/repaso1', [RepasoController::class, 'repaso1'])->name('Conversiones');


