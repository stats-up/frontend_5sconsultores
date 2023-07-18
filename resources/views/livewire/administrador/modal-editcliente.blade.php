<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Cliente {{isset($cliente_actual["name"]) ? $cliente_actual["name"] : ""}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="col-form-label">Nombre:</label>
                    <input wire:model="nombre" type="text" class="form-control" required="" minlength="2" placeholder="Nombre Empresa">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Logo:</label>
                    <input wire:model="logo" type="file" accept="image/*" class="form-control edit-logo">
                </div>
                <div class="py-4">
                    @if ($logo)
                        <img class="rounded mx-auto d-block" src="{{ $logo->temporaryUrl() }}" style="height: 100px;">
                    @elseif($old_logo != "")
                        <img class="rounded mx-auto d-block" src="{{$old_logo}}" style="height: 100px;">
                    @endif
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
                <button wire:click="editarCliente()" type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
        </div>
    </div>
    <script>
        $(".edit-logo").change(function(){
            Swal.fire({
                title: 'Cargando...',
                text: 'Espere un momento',
                showConfirmButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                onBeforeOpen: () => {
                    Swal.showLoading()
                }
            });
        });
    </script>
</div>