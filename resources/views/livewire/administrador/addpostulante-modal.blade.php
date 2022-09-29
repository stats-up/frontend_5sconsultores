<div>
    <div wire:ignore.self class="modal fade  modal-lg" id="addpostulanteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo perfil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">
                    <div class="col-lg-6 px-4">
                        <div class="mb-3">
                            <label class="col-form-label">Nombre Completo:</label>
                            <input wire:model="nombre" type="text" class="form-control" placeholder="Nombre completo de perfil">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Rut</label>
                            <input wire:model="rut" type="text" class="form-control" placeholder="XX.XXX.XXX-X">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Sexo</label>
                            <select wire:model="sexo" class="form-select" aria-label="Default select example">
                                <option selected>Seleccione...</option>
                                <option value="1">Femenino</option>
                                <option value="2">Masculino</option>
                                <option value="3">Otro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Ciudad de residencia:</label>
                            <input wire:model="ciudad" type="text" class="form-control" placeholder="Ciudad">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Comuna</label>
                            <input wire:model="comuna" type="text" class="form-control" placeholder="Comuna">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Dirección</label>
                            <input wire:model="direccion" type="text" class="form-control" placeholder="Calle #numero - #Dpto/Casa">
                        </div>
                    </div>
                    <div class="col-lg-6 px-4">
                        <div class="mb-3">
                            <label class="form-label">Área de trabajo</label>
                            <select class="form-select" aria-label="Default select example">
                                @foreach ($areas as $area)
                                    <option value="{{$area["id"]}}">{{$area["name"]}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" >Descripción del perfil</label>
                            <textarea wire:model="descripcion" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" >Imagen</label>
                            <input wire:model="profilePic" type="file" accept="image/*" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" >PDF</label>
                            <input wire:model="cv" name="userfile" type="file" accept=".pdf" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" >Video de presentación (URL Youtube)</label>
                            <input wire:model="video" type="text" class="form-control" placeholder="https://youtu.be/XXXXXXXXXXX"/>
                        </div>
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
