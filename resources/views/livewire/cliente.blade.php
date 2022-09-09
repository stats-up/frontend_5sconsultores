@extends('layout')
@section('content')
<link href="{{ asset('css/cliente.css') }}" rel="stylesheet">
<div class="container-fluid" style="height:100vh;background-color:#fdfdfd;">
    <div class="row head">
        <div class="col-md-12 d-flex justify-content-between top">
            <img class="responsiveImg" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
            <div class="d-flex align-items-center nombrecliente">Nombre empresa cliente</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center titulo">Requerimientos</div>
    </div>
    <div class="row overflow-auto list" style="max-height:70vh;justify-content:center;">
        <div class="col" style="max-width:65rem;">
            @for ($i = 0; $i < 7; $i++)
            <div class="card row justify-content-center">
                <div class="card-body row mx-0">
                    <div class="col-lg-10">
                        <div class="cargo ">Ingeniero Senior de Metalurgia</div>
                        <div class="descripcion p-2">
                            <div> Profesión: Ingeniero Civil/ Ejecución Quimica/ Metalurgico</div>
                            <div> Experiencia: Al menos 8 años de en procesos de plantas</div>
                            <div> Experiencia: Al menos 4 años en plantas de tratamientos minerales sulfurados de cobre</div>
                            <div> Experiencia: En Metalurgia Extractiva de cobre por via concentradora</div>
                            <div> Manejo de Herramientas: Microsoft Office a nivel usuario</div>
                        </div>
                        <div class="condiciones p-2 ">
                            <div> Turno: 4x3</div>
                            <div> Faena:Mantos Blancos</div>
                        </div>
                    </div>
                    <div class="col-lg-2 py-2">
                        <button class="btn-postulantes" style="width:100%">Ver postulantes</button>
                    </div>
                </div>
            </div>   
            @endfor
        </div>
    </div>
</div>
@endsection