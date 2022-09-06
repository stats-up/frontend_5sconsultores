@extends('layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 30%;">
            <h1>Inicio de Sesión</h1>
              <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
              </form>
    
            </div>    
    </div>
      
        



@endsection