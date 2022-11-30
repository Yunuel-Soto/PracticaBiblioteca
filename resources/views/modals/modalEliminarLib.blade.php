<form method="POST" action="{{route('libros.destroy', $consulta->idLibro)}}">
    @csrf
    @method('delete')
    <div class="modal fade" id="ModalEliminarLib" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="ModalEliminarLib" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="/img/advertencia.png" alt=""> <h3 class="modal-title eliminlabelt" id="staticBackdropLabel">Eliminar</h3>
                </div>
                <div class="modal-body">
                    <h3 class="eliminlabel2">{{$consulta->titulo}}</h3>
                    <h5 class="eliminlabel">Autor: {{$consulta->autor}}</h5>
                    <h5 class="eliminlabel">Editorial: {{$consulta->editorial}}</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
<form/>
