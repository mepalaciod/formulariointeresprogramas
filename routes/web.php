<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/guardar-respuesta', [FormularioController::class, 'store'])->name('store');