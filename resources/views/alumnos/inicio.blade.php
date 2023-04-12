@extends('layouts.app')

@section('content')
    <div>
        <div class="d-flex justify-content-end align-items-center">
            <a class="nav-link linkContents" href="{{ route('alumnos.create') }}">
                <h3 class="">Agregar alumno</h3>
                <i class="fa fa-plus-circle botonAgregar"></i>
            </a>
        </div>
                
        <h1 class="text-center">Alumnos</h1>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Nombre completo</th>
                <th scope="col">Dirección</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Genero</th>
                <th scope="col">Carrera</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($todos as $unico)
              <tr>
                <td>{{ $unico->nombres }} {{ $unico->apellido }}</th>
                <td>{{ $unico->direccion }}</td>
                <td>{{ $unico->telefono }}</td>
                <td>{{ $unico->email }}</td>
                <td>{{ $unico->fecha_nac }}</td>
                <td>{{ $unico->genero->tipo }}</td>{{-- {{ $unico->id_genero ? var_dump($unico->genero) : '' }} --}}
                <td>{{ $unico->carrera->nombre }}</td>
                <td style="padding:0;">
                  <a href="{{ route('alumnos.edit', $unico)}}" class="btn text-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Editar">{{-- btn btn-success btn-sm shadow-none --}}
                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                  </a>
                  <form action="{{ route('alumnos.destroy', $unico)}}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn text-danger btn-lg" data-toggle="tooltip" data-placement="top" title="Eliminar">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>


    </div>
@endsection