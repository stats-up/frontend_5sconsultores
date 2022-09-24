<div>
    <div class="container d-flex justify-content-center align-items-center" style="height:100vh">
        <div class="card " style="max-width:30rem; height:40rem">
            <div class="card-body">
                <div class="d-flex row justify-content-center py-3">
                    <img src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo" class="brandlogo">
                    <span class="text-muted" style="width:fit-content">
                        <i>Somos personas reclutando personas</i>
                    </span>
                    <div class="title text-muted" style="font-size:20px">Restablecer contraseña</div>
                </div>
                <div class="d-flex justify-content-center">
                    <form id="loginform">
                        <div style="justify-content:center">
                            <div class="form-group py-2 ">
                                <div class="form-floating">
                                    <input wire:model="passwd" type="password" class="form-control" id="floatingPassword" name="password" placeholder="Contraseña">
                                    <label for="floatingPassword">Contraseña</label>
                                    <i class="icon fa-sharp fa-solid fa-eye-slash" id="togglePassword"></i>
                                </div>
                            </div>
                            <div class="form-group py-2 ">
                                <div class="form-floating">
                                    <input wire:model="passwd" type="password" class="form-control" id="floatingPassword" name="password" placeholder="Contraseña">
                                    <label for="floatingPassword">Repetir contraseña</label>
                                    <i class="icon fa-sharp fa-solid fa-eye-slash" id="togglePassword"></i>
                                </div>
                            </div>
                        </div>
                        <div class="footerL py-3">
                            <button type="submit" class="btn btn-submit">Restablecer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>