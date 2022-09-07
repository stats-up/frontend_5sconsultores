@extends('layout')
@section('content')
<div id="login-div " class="row m-5 justify-content-center">
    <div class="card col-xxl-4 gx-2" style="max-width:30rem;height:40rem">
        <div >
            <div class="card-body row justify-content-center py-5">
                    <img src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo" style="max-width:18rem;max-height:7rem">
                    <span class=" row text-muted" style="width:fit-content">
                        <i>Somos personas reclutando personas</i>
                    </span>
                    <div class="title">Inicio de Sesión</div>
                <form class="text-start">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Correo electrónico" autofocus>
                        <label for="floatingInput">Correo electrónico</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Contraseña">
                        <label for="floatingPassword">Contraseña</label>
                        <i class="icon fa-sharp fa-solid fa-eye-slash" id="togglePassword"></i>
                    </div>
                    <div class="p-3 row d-flex justify-content-center">
                        <button type="submit" class="btn btn-submit col-sm-12" style="background-color:#df9f17;color:white">Ingresar</button>
                        <div class="footerLog d-flex justify-content-center py-3" style="color:grey">¿Olvidaste tu contraseña?</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
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
@endsection