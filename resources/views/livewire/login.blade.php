<div>
    <div class="container d-flex justify-content-center align-items-center" style="height:100vh">
        <div class="card " style="max-width:30rem; height:40rem">
            <div class="card-body">
                <div class="d-flex row justify-content-center py-3">
                    <img src="img/Logo_5s_web.jpg" alt="Logo" class="brandlogo">
                    <span class="text-muted" style="width:fit-content">
                        <i>Somos personas reclutando personas</i>
                    </span>
                    <div class="title">Inicio de Sesión</div>
                </div>
                <div class="d-flex justify-content-center">
                    <form id="loginform">
                        <div style="justify-content:center">
                            <div class="form-group py-2">
                                <div class="form-floating ">
                                    <input wire:model="email" type="email" class="form-control" id="floatingInput" name="email" placeholder="Correo electrónico" autofocus>
                                    <label for="floatingInput">Correo electrónico</label>
                                </div>
                            </div>
                            <div class="form-group py-2 ">
                                <div class="form-floating">
                                    <input wire:model="passwd" type="password" class="form-control" id="floatingPassword" name="password" placeholder="Contraseña">
                                    <label for="floatingPassword">Contraseña</label>
                                    <i class="icon fa-sharp fa-solid fa-eye-slash" id="togglePassword"></i>
                                </div>
                            </div>
                        </div>
                        <div class="footerL py-3">
                            <button type="submit" class="btn btn-submit">Ingresar</button>
                            <div class="footerLog d-flex justify-content-center py-3" >
                                <a href="/sendemail" style="color:grey">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready( function () {
            Swal.fire({
                title: 'Cargando',
                text: 'Espere por favor',
                allowOutsideClick: false,
                onOpen: () => {
                    Swal.showLoading();
                    Livewire.emit('validarSession');
                }
            });
            $("#loginform").on("submit", function(e){
                Swal.fire({
                title: 'Cargando',
                text: 'Espere por favor',
                allowOutsideClick: false,
                onOpen: () => {
                    Swal.showLoading();
                }
            });
                e.preventDefault();
                Livewire.emit('autenticar');
            });
        });
        window.addEventListener('incorrect', event =>{
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Usuario o contraseña incorrecto',
            });
        });
        window.addEventListener('incomplete', event =>{
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Ingrese su correo y contraseña',
            });
        });
        window.addEventListener('disabled', event =>{
            Swal.fire({
                icon: 'info',
                title: 'Oops...',
                text: 'Cuenta inhabilitada',
            });
        });
        window.addEventListener('close_swal', event =>{
            Swal.close();
        });
        const togglePassword = document
            .querySelector('#togglePassword');
    
        const password = document.querySelector('#floatingPassword');
    
        togglePassword.addEventListener('click', () => {
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
                
            password.setAttribute('type', type);
    
            // Toggle the eye and bi-eye icon
            togglePassword.classList.toggle('fa-eye');
        });
    </script>
</div>