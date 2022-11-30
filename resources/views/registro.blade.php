@extends('plantilla')

@section('relleno')

    @if(session()->has('guardar'))
        {!! "<script> Swal.fire({
            icon: 'success',
            title: 'Tu libro " . session()->get("guardar") . " se a guardado exitosamente',
            showConfirmButton: false,
            timer: 1500
          }) </script>"!!} {{--imprime sin restricciones --}}
    @endif

    <form action="{{route('libros.store')}}" method="POST" class="formulario">
        @csrf
        <p class="parrafo">
            Registro
        </p>
        <label for="">Titulo</label>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
            </div>
            <input name="titulo" type="text" class="form-control" value="{{old('titulo')}}" aria-label="Text input with radio button">
        </div>
        <p class="text-danger fst-italic p"> {{ $errors->first('titulo') }} </p>
        <label for="">Autor</label>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
            </div>
            <input name="autor" type="text" class="form-control" value="{{old('autor')}}" aria-label="Text input with radio button">
        </div>
        <p class="text-danger fst-italic p">{{ $errors->first('autor')}}</p>
        <label for="">ISBN</label>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
            </div>
            <input name="isbn" type="text" class="form-control" value="{{old('isbn')}}" aria-label="Text input with radio button">
        </div>
        <p class="text-danger fst-italic p">{{ $errors->first('isbn')}}</p>
        <label for="">Editorial</label>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
            </div>
            <input name="editorial" type="text" class="form-control" value="{{old('editorial')}}" aria-label="Text input with radio button">        </div>
        </div>
        <p class="text-danger fst-italic p">{{ $errors->first('editorial')}}</p>
        <label for="">Paginas</label>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
            </div>
            <input name="paginas" type="text" class="form-control" value="{{old('paginas')}}" aria-label="Text input with radio button">
        </div>
        <p class="text-danger fst-italic p">{{ $errors->first('paginas')}}</p>
        <label for="">Email del autor</label>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
            </div>
            <input name="email" type="text" class="form-control" value="{{old('email')}}" aria-label="Text input with radio button">
        </div>
        <p class="text-danger fst-italic p"> {{ $errors->first('email')}}</p>
        <div class="but-cont">
            <button type="submit" class="btn btn-success but">Guardar</button>
        </div>
    </form>
@stop
