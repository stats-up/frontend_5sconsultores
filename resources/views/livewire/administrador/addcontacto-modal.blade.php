<div>
    <div wire:ignore.self class="modal fade" id="addcontactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo contacto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input wire:model="nombre" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Correo</label>
                        <input wire:model="email" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Telefono</label>
                        <input wire:model="telefono" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Área</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleccione...</option>
                            <option value="1">Area1</option>
                            <option value="2">Area2</option>
                            <option value="3">Area3</option>
                        </select>
                    </div>
                    <div class="py-3 d-flex justify-content-center">
                        <div class="px-2">Inactivo</div>
                        <div class=" form-check form-switch d-flex justify-content-center">
                            <input wire:model="estado" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault" id="text-switch"></label>
                        </div>
                        <div class="px-2">Activo</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button wire:click="nuevoCliente()" type="button" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</div>
