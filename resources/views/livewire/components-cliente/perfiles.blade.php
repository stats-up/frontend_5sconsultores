<div class="container-fluid" style="height:100vh;background-color:#fdfdfd;">
    <div class="row head">
        <div class="col-md-12 d-flex justify-content-between top">
            <img class="responsivelogo" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
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
                <li class="breadcrumb-item active" aria-current="page">Perfiles</li>
            </ol>
        </nav>
    </div>
    <livewire:components-cliente.perfil-modal/>
    <div class="col-md-12 d-flex justify-content-center titulo">Perfiles</div>
    <div class="d-flex justify-content-center section">
        <div class="row row-cols-auto group-cards overflow-auto d-flex justify-content-center" style="max-width:100%;max-height:70vh">
            @for($i=0;$i<10;$i++)
                <div class="col py-2">
                    <div class="card" style="width:26rem;height:32rem;">
                        <div class="card-body" style="display:flex;justify-content:space-between;flex-direction:column">
                            <div class="d-flex justify-content-center align-items-center" style="display:flex;flex:1">
                                <img class="responsiveImg" src="https://wac-cdn.atlassian.com/es/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=531" alt="Logo"  class="brandlogo">
                            </div>
                            <div class=" py-4">
                                <h5 class="card-title">Nombre Completo</h5>
                                <p class="card-text">Descripción del perfil Descripción del perfilDescripción del perfil Descripción del perfilDescripción del perfil Descripción del perfilDescripción del perfil Descripción del perfilDescripción del perfil Descripción del perfil Descripción del perfil Descripción del perfil Descripción del perfil Descripción del perfil</p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#verperfilModal" class="btn btn-post">Ver perfil</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>    
</div>