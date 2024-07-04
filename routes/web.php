<?php

use App\Http\Controllers\EjemploController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return 'Bienvenidos a registro';
});

Route::get('/mensaje', [EjemploController::class, 'mensaje']);

Route::resource('/registros', RegistroController::class);
