<div>
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form wire:submit.prevent="submit" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input wire:model="nombre" type="text" class="form-control" id="recipient-name" required="" minlength="2" placeholder="Nombre Empresa">
                        @error('nombre') <span class="text-danger">Largo mínimo de 2 letras</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Logo:</label>
                        <input wire:model="logo" type="file" accept="image/*" class="form-control">
                    </div>
                    @if ($logo)
                        <img class="rounded mx-auto d-block" src="{{ $logo->temporaryUrl() }}" style="height: 100px;">
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>