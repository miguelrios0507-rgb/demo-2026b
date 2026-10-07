<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformacionPersonalController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Formulario', [InformacionPersonalController::class, 'create']);

Route::get('/horoscopo', [InformacionPersonalController::class, 'index']);

Route::post('/Recibir-formulario', [InformacionPersonalController::class, 'store']);


