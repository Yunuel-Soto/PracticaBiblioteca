@extends('plantilla')

@section('relleno')

@if (session()->has('Eliminacion'))
    {!! "<script> Swal.fire(
                    'Buen trabajo',
                    'Recuerdo eliminado',
                    'success') </script>" !!} {{-- imprime sin restricciones --}}
@endif

@if (session()->has('edicion'))
    {!! "<script> Swal.fire(
                    'Buen trabajo',
                    'Libro actualizado',
                    'success') </script>" !!} {{-- imprime sin restricciones --}}
@endif
{{-- SwitAlert --}}

@foreach ($result as $consulta)
        <br>
    @include('modals/modalActualizarLib')
    @include('modals/modalEliminarLib')

    <div class="container col-md-6">

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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#ModalActualizarLib">
                    <i class="bi bi-pencil"></i> Editar
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#ModalEliminarLib">
                    <i class="bi bi-trash3"></i> Eliminar
                </button>
            </div>
        </div>
    </div>
@endforeach

@stop