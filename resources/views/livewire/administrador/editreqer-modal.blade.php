<div>
    <div wire:ignore.self class="modal fade" id="editreqModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar requerimiento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input wire:model="name" type="text" class="form-control" id="recipient-name" minlength="3">
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Descripción</label>
                        <textarea wire:model="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
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
                    <button wire:click="save()" type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
</div>
