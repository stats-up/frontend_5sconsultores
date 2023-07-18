<div>
    <div wire:ignore.self class="modal fade" id="changePassMdl" tabindex="-1" aria-labelledby="changePassMdlLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="changePassMdlLabel">Cambiar contrasaeña</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">Nueva contraseña</label>
                        <input wire:model="new_password" type="password" class="form-control" id="newPassword">
                    </div>
                    <div class="mb-3">
                        <label for="newPasswordRepeat" class="form-label">Repetir Nueva contraseña</label>
                        <input wire:model="new_password_confirmation" type="password" class="form-control" id="newPasswordRepeat">
                    </div>
                    <div class="mb-3">
                        @php
                            $uppercase    = preg_match('@[A-Z]@', $new_password);
                            $lowercase    = preg_match('@[a-z]@', $new_password);
                            $number       = preg_match('@[0-9]@', $new_password);
                        @endphp
                        <i class="fa-solid fa-{{$lowercase ? 'check text-success' : 'xmark text-danger'}}"></i> Debe contener al menos una Minúscula
                        <br>
                        <i class="fa-solid fa-{{$uppercase ? 'check text-success' : 'xmark text-danger'}}"></i> Debe contener al menos una Mayúscula
                        <br>
                        <i class="fa-solid fa-{{$number ? 'check text-success' : 'xmark text-danger'}}"></i> Debe contener al menos un número
                        <br>
                        <i class="fa-solid fa-{{strlen($new_password) >= 8 ? 'check text-success' : 'xmark text-danger'}}"></i> La contraseña debe tener al menos 8 caracteres
                        <br>
                        <i class="fa-solid fa-{{($new_password == $new_password_confirmation && strlen($new_password) >= 8) ? 'check text-success' : 'xmark text-danger'}}"></i> Las contraseñas deben coincidir
                    </div>
                </div>
                <div class="modal-footer">
                    @if(strlen($new_password) >= 8 && $new_password == $new_password_confirmation && $uppercase && $lowercase && $number)
                        <button wire:loading.remove id="submitChangePassword" wire:click="submitChangePassword()" type="button" class="btn btn-success change-psswd">Cambiar</button>
                        <button wire:loading type="button" class="btn btn-success change-psswd" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Cambiando...
                        </button>
                    @else
                        <button type="button" class="btn btn-secondary" disabled="">Cambiar</button>
                    @endif
                </div>
            </form>
        </div>
    </div>
    <script>
        //load sweetalert2 on click submitChangePassword
        window.addEventListener('swalSuccess', event =>{
            Swal.fire({
                icon: 'success',
                title: event.detail,
            });
            $('#changePassMdl').modal('hide');
        });
        window.addEventListener('swalError', event =>{
            Swal.fire({
                icon: 'error',
                title: event.detail,
            });
        });
    </script>
</div>