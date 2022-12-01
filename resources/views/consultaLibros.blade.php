@extends('plantilla')

@section('relleno')

@if (session()->has('eliminar'))
    {!! "<script> Swal.fire(
                    'Buen trabajo',
                    'Libro eliminado',
                    'success') </script>" !!} {{-- imprime sin restricciones --}}
@endif

@if (session()->has('edicion'))
    {!! "<script> Swal.fire(
                    'Buen trabajo',
                    'Libro actualizado',
                    'success') </script>" !!} {{-- imprime sin restricciones --}}
@endif
{{-- SwitAlert --}}
<br>
@foreach ($result as $consulta)

    <div class="container col-md-6">
        @include('modalDetalles', ['id' => $consulta->idLibro])
        <div class="card text-center mb-5">
            <div class="card-header">
                <h4>{{ $consulta->titulo }}</h4>
            </div>

            <div class="card-body">
                <p><strong>Editorial:</strong> {{ $consulta->editorial }}</p>
                <p><strong>Autor:</strong> {{ $consulta->autor}}</p>
                <p><strong>Contacto:</strong> {{ $consulta->email}}</p>
            </div>

            <div class="card-footer">
                <a href="{{route('libros.edit', $consulta->idLibro)}}"><button type="submit" class="btn btn-warning">Editar</button></a>

                <a href="{{route('libros.show', $consulta->idLibro)}}"><button type="submit" class="btn btn-danger">Eliminar</button></a>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#ModalEliminarLib{{$consulta->idLibro}}">
                    <i class="bi bi-trash3"></i> Detalles
                </button>
            </div>
        </div>
    </div>
@endforeach

@stop
