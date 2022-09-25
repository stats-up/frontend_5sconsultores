<div>
    <div wire:ignore.self class="modal fade" id="vercontactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Información del contacto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2 d-flex col">
                        <label for="recipient-name" class="fw-bold">Nombre:</label>
                        <div class="d-flex align-items-center px-2">{{$name}}</div>
                    </div>
                    <div class="mb-2 d-flex col">
                        <label for="message-text" class="fw-bold">Correo:</label>
                        <div class="d-flex align-items-center px-2">{{$email}}</div>
                    </div>
                    <div class="mb-2 d-flex col">
                        <label for="message-text" class="fw-bold">Telefono:</label>
                        <div class="d-flex align-items-center px-2">{{$phone}}</div>
                    </div>
                    <div class="mb-2 d-flex col" >
                        <div class="fw-bold">Estado:</div>
                        <div class="status px-2">
                            @if ($status == "activa")
                                <span class="badge badge-success">Activa</span>
                            @elseif($status == "inactiva")
                                <span class="badge badge-warning">Inactiva</span>
                            @elseif($status == "eliminada")
                                <span class="badge badge-danger">Eliminada</span>
                            @endif
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
