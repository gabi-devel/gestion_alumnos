@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end align-items-center">
            <a class="nav-link linkContents" href="{{ route('carreras.index') }}">
                <i class="fa fa-light fa-arrow-left botonAgregarIzq"></i>
                <h3 class="">Volver</h3>
            </a>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <h1 class="mb-4 text-center">Editar carrera</h1>
                <form action="{{ route('carreras.update', $datos) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nombre"
                        name="nombre" id="nombre" value="{{ $datos->nombre }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection