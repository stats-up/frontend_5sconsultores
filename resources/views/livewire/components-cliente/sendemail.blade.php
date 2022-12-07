<div>
    <div class="container d-flex justify-content-center align-items-center" style="height:100vh">
        <div class="card " style="max-width:30rem; height:40rem">
            <div class="card-body">
                <div class="d-flex row justify-content-center py-3">
                    <img src="img/Logo_5s_web.jpg" alt="Logo" class="brandlogo">
                    <span class="text-muted" style="width:fit-content">
                        <i>Somos personas reclutando personas</i>
                    </span>
                    <div class="title " style="font-size:20px">¿Tienes problemas para iniciar sesión?</div>
                    <div class="px-4 text-muted d-flex row justify-content-center" style="font-size:14px;width:100%">
                        <div style="width:fit-content">Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña. </div>
                    </div> 
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
                        </div>
                        <div class="footerL py-3">
                            <button type="submit" class="btn btn-submit">Enviar enlace de inicio de sesión</button>
                            <div class="footerLog d-flex justify-content-center py-3" >
                                <a href="/" style="color:grey">Volver al ingreso</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>