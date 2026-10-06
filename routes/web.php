<?php

use App\Models\informacion_personal as InfoPersonal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Formulario', function () {
    return view('Formulario');
});
Route::get('/horoscopo', function () {
    $InfoPersonal = InfoPersonal::all();    
    return view('registros')->with(['InfoPersonal' => $InfoPersonal]);
});

Route::post('/Recibir-formulario', function (Request $request) {
    $infopersonal = new informacion_personal();
    $infopersonal->nombre = $request->input('nombre');
    $infopersonal->correo = $request->input('correo');
    $infopersonal->fecha_nacimiento = $request->input('fecha_nacimiento');
    $infopersonal->telefono = $request->input('telefono');  
    $infopersonal->save();  

    return redirect('/horoscopo');
});

