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
        $generos = Genero::all();/* pluck('tipo') */
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
        /* return $request->all(); */
        /* $request->validate([
            'id_genero' => 'required'
        ]); */
        Alumno::create($request->all());
        /* $alumno = new Alumno;
        $alumno->nombres = $request->input('nombres');
        $alumno->apellido = $request->input('apellido');
        $alumno->direccion = $request->input('direccion');
        $alumno->telefono = $request->input('telefono');
        $alumno->email = $request->input('email');
        $alumno->fecha_nac = $request->input('fecha_nac');
        $alumno->id_genero = $request->input('id_genero');
        $alumno->id_carrera = $request->input('id_carrera');
        $alumno->save(); */
        /* $validatedData = $request->validate([
            'title2' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
    
        $post = new Post();
        $post->title = $validatedData['title2']; // Asignamos el valor del campo del formulario al campo de la base de datos
        $post->body = $validatedData['body'];
        $post->save(); */

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
