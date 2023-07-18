<div>
    <div wire:ignore.self class="modal fade" id="editcontactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
        <div class="modal-dialog">
            <form wire:submit.prevent="submit" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar contacto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="col-form-label">Nombre:</label>
                        <input wire:model="name" type="text" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Correo</label>
                        <input wire:model="email" type="email" class="form-control" >
                    </div>
                    @if($id_area != null)
                        <div class="mb-3">
                            <label class="col-form-label">Teléfono</label>
                            <input wire:model="phone" type="text" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Área</label>
                            <select wire:model="id_area" class="form-select" aria-label="Default select example">
                                @foreach ($areas as $area)
                                    @if($area["status"] == "activo")
                                        <option value="{{$area["id"]}}">{{$area["name"]}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="py-3 d-flex justify-content-center">
                            <div class="px-2">Inactivo</div>
                            <div class=" form-check form-switch d-flex justify-content-center">
                                <input wire:model="status" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault" id="text-switch"></label>
                            </div>
                            <div class="px-2">Activo</div>
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
