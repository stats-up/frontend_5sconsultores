@extends('layout')
@section('content')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<div class="container-fluid "  style="height:100vh;background-color:#fdfdfd;">
    <div class="row head">
        <div class="col-md-12 d-flex justify-content-center top">
            <img class="responsiveImg" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
        </div>
        <div class="row titulo">Clientes</div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="row">
            @for ($i = 0; $i < 7; $i++)
            <div class="col-xl-3">
                <div class="card my-2" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    
</div>
@endsection
