@extends('layout')
@section('content')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <div class="container d-flex justify-content-center align-items-center" style="height:100vh">
        <div class="card " style="max-width:30rem; height:40rem">
            <div class="card-body">
                <div class="d-flex row justify-content-center py-3">
                    <img src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
                    <span class="text-muted" style="width:fit-content">
                        <i>Somos personas reclutando personas</i>
                    </span>
                    <div class="title">Inicio de Sesión</div>
                </div>
                <div class="d-flex justify-content-center">  
                    <form action="/login" method="POST">
                        @csrf
                        <div style="justify-content:center">
                            <div class="form-group py-2">
                                <div class="form-floating ">
                                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Correo electrónico" autofocus>
                                    <label for="floatingInput">Correo electrónico</label>
                                </div>
                            </div>
                            <div class="form-group py-2 ">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Contraseña">
                                    <label for="floatingPassword">Contraseña</label>
                                    <i class="icon fa-sharp fa-solid fa-eye-slash" id="togglePassword"></i>
                                </div>   
                            </div>
                        </div>
                        <div class="footerL py-3">
                            <button type="submit" class="btn btn-submit" style="background-color:#df9f17;color:white">Ingresar</button>
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