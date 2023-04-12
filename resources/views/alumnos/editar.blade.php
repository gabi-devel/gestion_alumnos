@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end align-items-center">
            <a class="nav-link linkContents" href="{{ route('alumnos.index') }}">
                <i class="fa fa-light fa-arrow-left botonAgregarIzq"></i>
                <h3 class="">Volver</h3>
            </a>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <h1 class="mb-4 text-center">Agregar nuevo alumno</h1>
                <form action="{{ route('alumnos.update', $datos) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nombre"
                        name="nombres" id="nombres" value="{{ $datos->nombres }}">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Apellido"
                        name="apellido" value="{{ $datos->apellido }}">{{--  id="apellido" --}}
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Direccion"
                         name="direccion" id="direccion" value="{{ $datos->direccion }}">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Telefono"
                        name="telefono" value="{{ $datos->telefono }}">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email"
                        name="email" id="email" value="{{ $datos->email }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Fecha de Nacimiento</span>
                        <input type="date" class="form-control"
                        name="fecha_nac" id="fecha_nac" value="{{ $datos->fecha_nac }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Género</span>
                        <select class="form-select shadow-none" name="id_genero">
                            <option value="{{ $datos->id_genero }}" selected disabled>{{ $datos->genero->tipo }}</option>
                            @foreach ($generos as $genero)
                                <option value="{{ $genero->id_genero }}">
                                {{ $genero->tipo }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Carrera</span>
                        <select class="form-select shadow-none" name="id_carrera">
                            <option value="{{ $datos->id_carrera }}" selected disabled>{{ $datos->carrera->nombre }}</option>
                            @foreach ($carreras as $carrera)
                                <option value="{{ $carrera->id }}">
                                {{ $carrera->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection