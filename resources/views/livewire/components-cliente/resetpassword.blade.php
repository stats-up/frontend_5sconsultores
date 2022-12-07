<div>
    <div class="container d-flex justify-content-center align-items-center" style="height:100vh">
        <div class="card " style="max-width:30rem; height:40rem">
            <div class="card-body">
                <div class="d-flex row justify-content-center py-3">
                    <img src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo" class="brandlogo">
                    <span class="text-muted" style="width:fit-content">
                        <i>Somos personas reclutando personas</i>
                    </span>
                    @if ($validado)
                        
                    <div class="title text-muted" style="font-size:20px">
                        Nueva contraseña
                    </div>
                    
                    @else
                    
                    <div class="title text-muted text-center" style="font-size:20px">
                        Este link no está disponible para el cambio de contraseña,
                    </div>
                    <div class="title text-muted" style="font-size:20px">
                        por favor solicite uno nuevo.
                    </div>
                    <div class="title text-muted" style="font-size:20px">
                        <a href="/sendemail">solicitar nueva contraseña</a>
                    </div>
                    <div class="title text-muted" style="font-size:20px">
                        <a href="/">volver</a>
                    </div>
                    @endif
                </div>
                @if($validado)
                    <div class="d-flex justify-content-center">
                        <form wire:submit.prevent="submit" id="loginform" method="POST">
                            <div style="justify-content:center">
                                <div class="form-group py-2 ">
                                    <div class="form-floating">
                                        <input wire:model="password" type="password" class="form-control" name="password" placeholder="Contraseña">
                                        <label for="floatingPassword">Contraseña</label>
                                        <i class="icon fa-sharp fa-solid fa-eye-slash" id="togglePassword"></i>
                                        @error('password') <span class="error text-danger">Mínimo 4 caracteres</span> @enderror
                                    </div>
                                </div>
                                <div class="form-group py-2 ">
                                    <div class="form-floating">
                                        <input wire:model="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Contraseña">
                                        <label for="floatingPassword">Repetir contraseña</label>
                                        <i class="icon fa-sharp fa-solid fa-eye-slash" id="togglePassword"></i>
                                        @error('password_confirmation') <span class="error text-danger">Mínimo 4 caracteres</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="footerL py-3">
                                <button type="submit" class="btn btn-submit">Actualizar</button>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('swalSuccess', event =>{
            Swal.fire({
                icon: 'success',
                title: event.detail,
            });
            window.location.href = "/logout";
        });
        window.addEventListener('swalError', event =>{
            Swal.fire({
                icon: 'error',
                title: event.detail,
            });
        });
    </script>
</div>