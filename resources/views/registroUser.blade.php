@extends('plantilla')

@section('relleno')

    @if (session()->has('guardarUser'))
        {!! "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong>El usuario a sido registrado exitosamente</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>" !!}
    @endif

    <form action="{{ route('user.store') }}" method="POST" class="formulario">
        @csrf
        <p class="parrafo">
            Registro clientes
        </p>
        <label for="">Nombre</label>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value=""
                    aria-label="Radio button for following text input">
            </div>
            <input name="nombre" type="text" class="form-control" value="{{ old('nombre') }}"
                aria-label="Text input with radio button">
        </div>
        <p class="text-danger fst-italic p"> {{ $errors->first('nombre') }} </p>

        <label for="">correo</label>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value=""
                    aria-label="Radio button for following text input">
            </div>
            <input name="email" type="text" class="form-control" value="{{ old('email') }}"
                aria-label="Text input with radio button">
        </div>
        <p class="text-danger fst-italic p">{{ $errors->first('email') }}</p>

        <label for="">INE</label>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value=""
                    aria-label="Radio button for following text input">
            </div>
            <input name="ine" type="text" class="form-control" value="{{ old('ine') }}"
                aria-label="Text input with radio button">
        </div>
        <p class="text-danger fst-italic p">{{ $errors->first('ine') }}</p>

        <div class="but-cont">
            <button type="submit" class="btn btn-success but">Guardar</button>
        </div>
    </form>

@stop
