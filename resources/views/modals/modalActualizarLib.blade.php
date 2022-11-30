
<form method="POST" action="{{route('libros.update', $consulta->idLibro)}}">
    @csrf
    @method('PUT')
    <div class="modal fade" id="ModalActualizarLib" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="ModalActualizarLib" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-body">
                        <h5 class="labels">Titulo</h5>
                        <input type="text" class="form-control" name="titulo" value="{{$consulta->titulo}}">
                        <p class="text-danger fst-italic">
                            {{ $errors->first('titulo') }}</p>
                        <h5 class="labels">Autor</h5>
                        <input type="text" class="form-control" name="autor" value="{{$consulta->autor}}">
                        <p class="text-danger fst-italic">
                            {{ $errors->first('autor') }}</p>
                        <h5 class="labels">ISBN</h5>
                        <input type="text" class="form-control" name="isbn" value="{{$consulta->isbn}}">
                        <p class="text-danger fst-italic">
                            {{ $errors->first('isbn') }}</p>
                        <h5 class="labels">Editorial</h5>
                        <input type="text" class="form-control" name="editorial" value="{{$consulta->editorial}}">
                        <p class="text-danger fst-italic">
                            {{ $errors->first('editorial') }}</p>
                        <h5 class="labels">Paginas</h5>
                        <input type="text" class="form-control" name="paginas" value="{{$consulta->paginas}}">
                        <p class="text-danger fst-italic">
                            {{ $errors->first('paginas') }}</p>
                        <h5 class="labels">Email del autor</h5>
                        <input type="text" class="form-control" name="email" value="{{$consulta->email}}">
                        <p class="text-danger fst-italic">
                            {{ $errors->first('email') }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No guardar cambios</button>
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
</form>
