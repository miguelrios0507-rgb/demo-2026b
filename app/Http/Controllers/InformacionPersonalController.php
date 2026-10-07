<?php

namespace App\Http\Controllers;

use App\Models\InformacionPersonal;
use Illuminate\Http\Request;

class InformacionPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $InfoPersonal = InformacionPersonal::all();
    return view('registros')->with(['InfoPersonal' => $InfoPersonal]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string',
        'correo' => 'required|email',
        'fecha_nacimiento' => 'required|date',
        'telefono' => 'required',
    ]);

    $infopersonal = new InformacionPersonal();
    $infopersonal->nombre = $request->input('nombre');
    $infopersonal->correo = $request->input('correo');
    $infopersonal->fecha_nacimiento = $request->input('fecha_nacimiento');
    $infopersonal->telefono = $request->input('telefono');
    $infopersonal->save();

    return redirect('/horoscopo');
}
    /**
     * Display the specified resource.
     */
    public function show(InformacionPersonal $informacionPersonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InformacionPersonal $informacionPersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InformacionPersonal $informacionPersonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InformacionPersonal $informacionPersonal)
    {
        //
    }
}
