@extends('layouts.app')

@section('content')
  <div>
      <div class="d-flex justify-content-end align-items-center">
          <a class="nav-link linkContents" href="{{ route('carreras.create') }}">
              <h3 class="">Agregar carrera</h3>
              <i class="fa fa-plus-circle botonAgregar"></i>
          </a>
      </div>
              
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Carreras</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($todos as $unico)
            <tr>
              <td>{{ $unico->nombre }}</th>
              <td style="padding:0;">
                <a href="{{ route('carreras.edit', $unico)}}" class="btn text-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Editar">{{-- btn btn-success btn-sm shadow-none --}}
                  <i class="fa fa-pencil-square" aria-hidden="true"></i>
                </a>
                <form action="{{ route('carreras.destroy', $unico)}}" method="POST" class="d-inline-block">
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