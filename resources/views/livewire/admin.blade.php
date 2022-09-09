@extends('layout')
@section('content')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<div class="container-fluid"  style="height:100vh;background-color:#fdfdfd;">
    <div class="row head">
        <div class="col-md-12 top">
            <img class="responsiveImg" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
        </div>
        <div class="row titulo">Clientes</div>
    </div>
    <div class="d-flex justify-content-center section">
        <div class="row row-cols-auto group-cards overflow-auto" style="max-width:90rem;max-height:70vh">
            @for ($i = 0; $i < 8; $i++)
            <div class="col-md-12" style="width:14rem">
                <div class="card my-2">
                    <div class="card-body">
                      <h5 class="card-title">Nombre empresa nombre empresa</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="divbtn">
                        <a href="/contactos" class="btn btn-emp">Ver Contactos</a>
                      </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    
</div>
@endsection
