<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Formulario', function () {
    return view('Formulario');
});

Route::post('/Recibir-formulario', function (Request $request) {
    return $request->all();
});