<div>
    <div wire:ignore.self class="modal fade  modal-lg" id="editpostulanteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar perfil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">
                    <div class="col-lg-6 px-4">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre Completo:</label>
                            <input wire:model="nombre" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Rut</label>
                            <input wire:model="email" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Sexo</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccione...</option>
                                <option value="1">Femenino</option>
                                <option value="2">Masculino</option>
                                <option value="3">Otro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Ciudad de residencia:</label>
                            <input wire:model="email" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Dirección</label>
                            <input wire:model="email" type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="col-lg-6 px-4">
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label" >Descripción del perfil</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label" >Imagen</label>
                            <input wire:model="profilePic" type="file" accept="image/*" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label" >Curriculum vitae</label>
                            <input name="userfile" type="file" accept=".doc, .docx, .pdf" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label" >Video de presentación</label>
                            <input name="userfile" type="file" accept=".pdf" class="form-control"/>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button wire:click="nuevoCliente()" type="button" class="btn btn-primary">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
</div>
