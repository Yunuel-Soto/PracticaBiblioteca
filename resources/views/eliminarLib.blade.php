@extends('plantilla')

@section('relleno')


    <form method="POST" action="{{ route('libros.destroy', $datos->idLibro) }}" class="formulario edit">
        @csrf
        @method('delete')
        <p class="parrafo">
            ELIMINAR
        </p>
        <label class="letras" for=""><strong>Nombre: </strong>{{$datos->titulo}}</label>

        <label class="letras" for=""><strong>Autor: </strong>{{$datos->autor}}</label>

        <label class="letras" for=""><strong>ISBN: </strong>{{$datos->isbn}}</label>

        <label class="letras" for=""><strong>Editorial: </strong>{{$datos->editorial}}</label>

        <label class="letras" for=""><strong>Paginas: </strong>{{$datos->paginas}}</label>

        <label class="letras" for=""><strong>Email: </strong>{{$datos->email}}</label>
        <br>

        <div class="but-cont">
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a class="btn btn-primary" href="{{route('libros.consulta')}}">Cancelar</a>
        </div>
    </form>
@stop
