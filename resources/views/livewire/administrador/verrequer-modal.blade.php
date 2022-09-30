<div>
    <div wire:ignore.self class="modal fade modal-xl" id="verrequerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$name}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2 d-flex col">
                        <label for="message-text" class="fw-bold">Solicitado por:</label>
                        <div class="d-flex align-items-center px-2">{{$contacto}}</div>
                        <div class="d-flex align-items-center px-2">{{$email_contacto}}</div>
                    </div>
                    <div class="mb-2 d-flex col">
                        <label for="message-text" class="fw-bold">Vista previa del cliente:</label>
                        <div class="d-flex align-items-center px-2"></div>
                    </div>
                    <div class="col">
                        <div class="card row justify-content-center">
                            <div class="card-body row mx-0">
                                <div class="col-lg-9" style="height:fit-content">
                                    <div class="cargo" >{{$name}}</div>
                                    <div class="descripcion py-2" style="white-space: pre;">{{$descripcion}}</div>
                                </div>
                                <div class="col-lg-3 py-2 text-center">
                                    <button class="btn-postulantes" style="width:80%;">
                                        <a  href="/requerimientos?c={{$id_cliente}}" class="btn-text" >Ver postulantes</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
