<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Formulario', function () {
    return view('Formulario');
});

Route::post('/Recibe-formulario', function (Request $request) {
    return $request->all();
});