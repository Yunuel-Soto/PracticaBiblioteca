
    <div class="modal fade" id="ModalEliminarLib{{$id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="ModalEliminarLib" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Detalles</h3>
                </div>
                <div class="modal-body">
                    <h3 class="eliminlabel e1">{{$consulta->titulo}}</h3>
                    <h5 class="eliminlabel e2">Autor: {{$consulta->autor}}</h5>
                    <h5 class="eliminlabel e3">ISBN: {{$consulta->isbn}}</h5>
                    <h5 class="eliminlabel e4">Editorial: {{$consulta->editorial}}</h5>
                    <h5 class="eliminlabel e5">No Paginas: {{$consulta->paginas}}</h5>
                    <h5 class="eliminlabel e6">Contacto: {{$consulta->email}}</h5>
                    <h5 class="eliminlabel e7">Fecha del registro: {{$consulta->fecha}}</h5>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">volver</button>
                </div>
            </div>
        </div>
    </div>

