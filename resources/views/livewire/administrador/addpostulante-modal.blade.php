<div>
    <div wire:ignore.self class="modal fade modal-lg" id="addpostulanteModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <form wire:submit.prevent="submit" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo perfil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">
                    <div class="col-lg-6 px-4">
                        <div class="mb-3">
                            <label class="col-form-label">Nombre Completo:</label>
                            <input wire:model="full_name" type="text" class="form-control" placeholder="Nombre completo de perfil" minlength="3" required>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Rut</label>
                            <input wire:model="dni" type="text" class="form-control" placeholder="XX.XXX.XXX-X" minlength="7" required>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Sexo</label>
                            <select wire:model="gender" class="form-select" aria-label="Default select example">
                                <option>Femenino</option>
                                <option>Masculino</option>
                                <option>Otro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Ciudad de residencia:</label>
                            <input wire:model="city" type="text" class="form-control" placeholder="Ciudad" minlength="3" required>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Comuna</label>
                            <input wire:model="commune" type="text" class="form-control" placeholder="Comuna" minlength="3" required>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Dirección</label>
                            <input wire:model="address" type="text" class="form-control" placeholder="Calle #numero - #Dpto/Casa" minlength="5" required>
                        </div>
                    </div>
                    <div class="col-lg-6 px-4">
                        <div class="mb-3">
                            <label class="form-label">Área de trabajo</label>
                            <select wire:model="applicant_area" class="form-select" aria-label="Default select example">
                                @foreach ($areas as $area)
                                    <option value="{{$area["id"]}}">{{$area["name"]}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" >Descripción del perfil</label>
                            <textarea wire:model="description" class="form-control" rows="3" maxlength="600"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" >Imagen</label>
                            <div>
                                <input wire:model="image" id="profileImage" type="file" accept="image/*" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" >PDF</label>
                            <input wire:model="pdf" name="userfile" type="file" accept=".pdf" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" >Video de presentación (URL Youtube)</label>
                            <input wire:model="youtube_url" type="text" class="form-control" placeholder="https://youtu.be/XXXXXXXXXXX"/>
                        </div>
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
