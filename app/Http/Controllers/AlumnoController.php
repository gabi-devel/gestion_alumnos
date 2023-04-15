<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Genero;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $generos = Genero::all();
        $alumnos = Alumno::all();
        $carreras = Carrera::all();
        return view('alumnos.inicio', ['todos' => $alumnos, 'generos' => $generos, 'carreras' => $carreras]);
    }

    public function create()
    {
        $generos = Genero::all();
        $carreras = Carrera::all();
        return view('alumnos.crear', ['generos' => $generos, 'carreras' => $carreras]);
    }

    public function store(Request $request)
    {
        Alumno::create($request->all());

        return redirect()->route('alumnos.index');
    }

    public function edit(Alumno $alumno)
    {
        $generos = Genero::all();
        $carreras = Carrera::all();
        return view('alumnos.editar', ['datos' => $alumno, 'generos' => $generos, 'carreras' => $carreras]);
    }
    
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());
        return redirect()->route('alumnos.index');
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return back();
    }
}