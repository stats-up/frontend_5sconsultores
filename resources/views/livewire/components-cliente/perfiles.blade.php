<div class="container-fluid" style="height:100vh;background-color:#fdfdfd;">
    <div class="row head">
        <div class="col-md-12 d-flex justify-content-between top">
            <img class="responsivelogo" src="img/logo_5s_web.jpg" alt="Logo"  class="brandlogo">
            <div class="dropdown nombrecliente">
                <a class="dropdown-toggle sesiontoggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black">      
                    <div class="name" style="padding-right:0.5rem">{{Session::get('user')["email"]}}</div>
                </a>
                <ul class="dropdown-menu sessionmenu" aria-labelledby="navbarDropdown"  style="margin-top:4rem;width:fit-content" >
                    <li>
                        <a class="dropdown-item sessionitem" href="/logout" style="display:flex;flex-direction:row">
                            <i class="bi bi-box-arrow-in-right" style="font-size:1.3rem;color:red;display:flex;align-items:center;padding-right:0.5rem"></i>
                            Cerrar sesión
                        </a>                  
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row p-2">            
        <nav aria-label="breadcrumb" style="padding-left:4rem">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/cliente" style="color:#c99616">Requerimientos</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$requerimiento}}</li>
                <li class="breadcrumb-item active" aria-current="page">Perfiles</li>
            </ol>
        </nav>
    </div>
    <livewire:components-cliente.perfil-modal/>
    <div class="col-md-12 d-flex justify-content-center titulo">Perfiles</div>
    <div class="d-flex justify-content-center section">
        <div class="row row-cols-auto group-cards overflow-auto d-flex justify-content-center" style="width:100%;max-height:70vh">
            @foreach($perfiles as $perfil)
                <div class="col py-2">
                    <div class="card" style="width:26rem;height:32rem;">
                        <div class="card-body" style="display:flex;justify-content:space-between;flex-direction:column">
                            <div class="d-flex justify-content-center align-items-center">
                                @if ($perfil["image_base_64"] != null)    
                                    <img class="responsiveImg" src="{{$perfil["image_base_64"]}}" alt="Logo"  class="brandlogo">
                                @else
                                    <img class="responsiveImg" src="/img/no-imagen.png" alt="Logo"  class="brandlogo">
                                @endif
                            </div>
                            <div class="py-4">
                                <h5 class="card-title">{{$perfil['nombre_completo']}}</h5>
                                <p class="card-text">{{$perfil['descripcion']}}</p>
                            </div>
                            <div  style="display:flex;flex:1;align-items:end;padding-bottom:1rem">
                                <a wire:click="seleccionarVerPostulanteModal({{$perfil["id"]}})" data-bs-toggle="modal" data-bs-target="#verperfilModal" class="btn btn-post" style="height:fit-content">Ver perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>    
</div>

