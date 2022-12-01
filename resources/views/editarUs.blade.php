@extends('plantilla')

@section('relleno')

    <form method="POST" action="{{ route('user.update', $datos->idUsers) }}" class="formulario edit">
        @csrf
        @method('PUT')
        <p class="parrafo">
            Editar cliente
        </p>
        <label for="">Nombre</label>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value=""
                    aria-label="Radio button for following text input">
            </div>
            <input name="nombre" type="text" class="form-control" value="{{ $datos->nombre }}"
                aria-label="Text input with radio button">
        </div>
        <p class="text-danger fst-italic p"> {{ $errors->first('nombre') }} </p>

        <label for="">correo</label>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value=""
                    aria-label="Radio button for following text input">
            </div>
            <input name="email" type="text" class="form-control" value="{{ $datos->email}}"
                aria-label="Text input with radio button">
        </div>
        <p class="text-danger fst-italic p">{{ $errors->first('email') }}</p>

        <label for="">INE</label>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value=""
                    aria-label="Radio button for following text input">
            </div>
            <input name="ine" type="text" class="form-control" value="{{ $datos->ine }}"
                aria-label="Text input with radio button">
        </div>
        <p class="text-danger fst-italic p">{{ $errors->first('ine') }}</p>

        <div class="but-cont">
            <button type="submit" class="btn btn-success but">Guardar</button>
        </div>
    </form>

@stop
