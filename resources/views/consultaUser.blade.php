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
                    <th scope="col">Fecha</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>

            @foreach ($result as $consulta)
                <tbody>
                    <tr>
                        <th scope="row">{{ $consulta->idUsers }}</th>
                        <td>{{ $consulta->nombre }}</td>
                        <td>{{ $consulta->email }}</td>
                        <td>{{ $consulta->ine }}</td>
                        <td>{{ $consulta->fecha }}</td>
                        <td>
                            <a href="{{route('user.edit', $consulta->idUsers)}}"><button type="submit" class="btn btn-primary"><img src="/img/editar.png" alt=""></button></a>
                        </td>
                        <td>
                            <a href="{{route('user.show', $consulta->idUsers)}}"><button type="submit" class="btn btn-danger"><img src="/img/eliminar.png" alt=""></button></a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>


@stop
