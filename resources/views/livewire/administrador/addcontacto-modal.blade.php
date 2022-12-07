<div>
    <div wire:ignore.self class="modal fade" id="addcontactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form wire:submit.prevent="submit" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Nuevo contacto para: 
                        <br>
                        {{$nombre_area}}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre completo</label>
                        <input wire:model="name" type="text" class="form-control" placeholder="Nombre completo del contacto" minlength="2" required>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Correo</label>
                        <input wire:model="email" type="email" class="form-control" placeholder="________@____.___" required>
                    </div>
                    @if($id_area != null)
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Telefono</label>
                            <input wire:model="phone" type="text" class="form-control" placeholder="+___________" minlength="5">
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        window.addEventListener('emailExist', event =>{
            let user = event.detail;
            Swal.fire({
                icon: 'warning',
                title: 'El correo ya existe',
                text: 'El correo ' + user.email,
                html: 'Este se encuentra en... <br> <b>Cliente:</b> ' + user.nombre_empresa + '<br> <b>Área:</b> ' + user.area_empresa + '<br><b>Correspondiente a:</b> ' + user.nombre_completo
                });
        });
    </script>
</div>
