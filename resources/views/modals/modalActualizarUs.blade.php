
<form method="POST" action="{{route('user.update', $consulta->id)}}">
    @csrf
    @method('PUT')
    <div class="modal fade" id="ModalActualizarUs{{$id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="ModalActualizarUs" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-body">
                        <h5 class="labels">Nombre</h5>
                        <input type="text" class="form-control" name="nombre" value="{{$consulta->nombre}}">
                        <p class="text-danger fst-italic">
                            {{ $errors->first('nombre') }}</p>
                        <h5 class="labels">Email</h5>
                        <input type="text" class="form-control" name="email" value="{{$consulta->email}}">
                        <p class="text-danger fst-italic">
                            {{ $errors->first('email') }}</p>
                        <h5 class="labels">INE</h5>
                        <input type="text" class="form-control" name="ine" value="{{$consulta->ine}}">
                        <p class="text-danger fst-italic">
                            {{ $errors->first('ine') }}</p>
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
