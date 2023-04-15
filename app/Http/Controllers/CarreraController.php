<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index()
    {
        /* $carreras = Carrera::pluck('nombre')->toArray();
        return view('carreras.inicio', compact('carreras')); */
        $carreras = Carrera::all();
        return view('carreras.inicio', ['todos' => $carreras]);
    }

    public function create()
    {
        $carreras = Carrera::all();
        return view('carreras.crear', ['carreras' => $carreras]);
    }

    public function store(Request $request)
    {
        Carrera::create($request->all());
        return redirect()->route('carreras.index');
    }

    public function edit(Carrera $carrera)
    {
        return view('carreras.editar', ['datos' => $carrera]);
    }
    
    public function update(Request $request, Carrera $carrera)
    {
        $carrera->update($request->all());
        return redirect()->route('carreras.index');
    }

    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return back();
    }
}