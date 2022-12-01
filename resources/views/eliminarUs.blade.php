@extends('plantilla')

@section('relleno')

    <form method="POST" action="{{ route('user.destroy', $datos->idUsers) }}" class="formulario elim">
        @csrf
        @method('delete')
        <p class="parrafo">
            ELIMINAR
        </p>
        <label for="" class="letras"><strong>Nombre: </strong>{{$datos->nombre}}</label>

        <label for="" class="letras"><strong>Email: </strong>{{$datos->email}}</label>

        <label for="" class="letras"><strong>INE: </strong>{{$datos->ine}}</label>

        <div class="but-cont">
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a class="btn btn-primary" href="{{route('user.index')}}">Cancelar</a>
        </div>
    </form>

@stop
