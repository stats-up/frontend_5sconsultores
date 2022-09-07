@extends('layout')
@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height:100vh">
        <div class="card" style="width:30rem; height:40rem">
            <div class="card-body">
                <div class="d-flex row justify-content-center py-3">
                    <img src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo" style="width:18rem;height:7rem">
                    <span class="text-muted" style="width:fit-content">
                        <i>Solo los usuarios con privilegios pueden ingresar.</i>
                    </span>
                    <div class="title">Inicio de Sesión</div>
                </div>
                <div class="d-flex justify-content-center">  
                    <form action="/login" method="POST">
                        @csrf
                        <div style="width:24rem;">
                            <div class="form-group py-2">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Correo electrónico" autofocus>
                                    <label for="floatingInput">Correo electrónico</label>
                                </div>
                            </div>
                            <div class="form-group py-2">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Contraseña">
                                    <label for="floatingPassword">Contraseña</label>
                                </div>   
                            </div>
                        </div>
                        <div class="py-3">
                            <button type="submit" class="btn btn-submit" style="width:24rem;background-color:#df9f17;color:white">Ingresar</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>    
    </div>
     



@endsection