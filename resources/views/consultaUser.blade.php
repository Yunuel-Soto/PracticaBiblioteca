@extends('plantilla')

@section('relleno')

    @if (session()->has('eliminacionU'))
        {!! "<script> Swal.fire(
                                    'Buen trabajo',
                                    'Usuario eliminado',
                                    'success') </script>" !!} {{-- imprime sin restricciones --}}
    @endif

    @if (session()->has('edicionU'))
        {!! "<script> Swal.fire(
                                    'Buen trabajo',
                                    'Usuario actualizado',
                                    'success') </script>" !!} {{-- imprime sin restricciones --}}
    @endif
    <br>

    <div class="tabla">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Email</th>
                    <th scope="col">INE</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>

            @foreach ($result as $consulta)
                @include('modals/modalActualizarUs', ['id' => $consulta->id])
                @include('modals/modalEliminarUs', ['id' => $consulta->id])
                <tbody>
                    <tr>
                        <th scope="row">{{ $consulta->id }}</th>
                        <td>{{ $consulta->nombre }}</td>
                        <td>{{ $consulta->email }}</td>
                        <td>{{ $consulta->ine }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#ModalActualizarUs{{ $consulta->id }}">
                                <img src="/img/editar.png" alt="">
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#ModalEliminarUs{{ $consulta->id }}">
                                <img src="/img/eliminar.png" alt=""></button>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>


@stop
