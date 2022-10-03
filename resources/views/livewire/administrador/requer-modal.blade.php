<div>
    <div wire:ignore.self class="modal fade" id="addreqModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
        <div class="modal-dialog">
            <form wire:submit.prevent="submit" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo requerimiento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input wire:model="name" type="text" class="form-control" id="recipient-name" minlength="3">
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Área</label>
                        <select wire:change="get_accounts_by_customer_area($event.target.value)" class="form-select" required>
                            <option value="" selected disabled>Seleccione...</option>
                            @foreach ($customer_areas as $item)
                                @if ($item["status"] != "eliminado")
                                    <option value="{{$item["id"]}}">{{$item["name"]}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Solicitante</label>
                        <select wire:model="requester_account" class="form-select" required autocomplete="off">
                            <option value="" selected >Seleccione...</option>
                            @foreach ($accounts as $account)
                                @if ($account["estado_cuenta"] != "eliminada")
                                    <option value="{{$account["id"]}}">{{$account["nombre_completo"]}}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('requester_account') <span class="text-danger">Seleccione un Solicitante</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Descripción</label>
                        <textarea wire:model="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>
