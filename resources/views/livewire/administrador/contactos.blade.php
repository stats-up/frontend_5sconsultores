<div class="container-fluid" style="height:100vh;background-color:#fdfdfd;">
    <div class="row head">
        <div class="col-md-12 d-flex justify-content-between top">
            <img class="responsiveImg" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
            <div class="dropdown nombrecliente">
                <a class="dropdown-toggle sesiontoggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black">      
                    <div class="name" style="padding-right:0.5rem">{{Session::get('user')["email"]}}</div>
                </a>
                <ul class="dropdown-menu sessionmenu" aria-labelledby="navbarDropdown"  style="margin-top:4rem" >
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
                  <li class="breadcrumb-item"><a href="/admin" style="color:#c99616">Clientes</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contactos</li>
                </ol>
              </nav>
        </div>
        <div class="row titulo">Contactos</div>
        <div class="row overflow-auto" style="display:flex;justify-content:center;padding-top:1rem;max-height:70vh">
            <div class="col-12 body-contactos " style="width:65rem">
                @for ($i = 0; $i < 7; $i++)
                    <div class="col-md-12 py-2">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title py-2">Area TI</h5>
                              @for($j=0;$j<3;$j++)
                                <div class="row person">
                                    <div class="col-md-10 ">
                                        <div class="row person-info">
                                            <h6 class="col-md-auto card-subtitle text-muted d-flex align-items-end">Nombre del contacto</h6>
                                            <div class="col-md-3 person-info-item d-flex align-items-center">
                                                <i class="icon bi bi-telephone-fill"></i>
                                                <span class="px-2">+569 1234567</span>
                                            </div>
                                            <div class="col-md-3 person-info-item">
                                                <i class="icon bi bi-envelope-fill"></i>
                                                <span class="px-2">user@gmail.cl</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button>Ver</button>
                                    </div>
                                    <div class="row requerimientos">
                                        <div class="col-md-12">
                                            a
                                        </div>
                                    </div>
                                </div>
                              @endfor
                            </div>
                          </div>
                    </div>
                @endfor
            </div>
        </div>
</div>