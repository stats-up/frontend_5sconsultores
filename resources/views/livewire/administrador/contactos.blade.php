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
    <livewire:administrador.contacto-modal/>
    <livewire:administrador.editcontacto-modal/>
    <livewire:administrador.addarea-modal/>
    <livewire:administrador.requer-modal/>
        <div class="row p-2">            
              <nav aria-label="breadcrumb" style="padding-left:4rem">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin" style="color:#c99616">Clientes</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contactos</li>
                </ol>
              </nav>
        </div>
        <div class="row titulo">Contactos</div>
        <div class="row btn-addempresa" style="max-width:80rem;margin-left:10rem;margin-bottom:1rem">
            <button href="#" class="btn-post" data-bs-toggle="modal" data-bs-target="#addAreaModal">
            <i class="bi bi-plus"></i>Agregar nueva área</button>
    </div>
        <div class="row overflow-auto" style="display:flex;justify-content:center;padding-top:1rem;max-height:70vh">
            <div class="col-12 body-contactos " style="width:65rem">
                @for ($i = 0; $i < 7; $i++)
                    <div class="col-md-12 py-2">
                        <div class="card" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;border:transparent">
                            <div class="card-body">
                                <div class="row headArea px-2 d-flex justify-content-between" >
                                    <h5 class="card-title py-2" style="width:fit-content">Area TI</h5>
                                    <div class="dropdown d-flex align-items-center" style="width:fit-content">
                                      <a class=" dropdown-toggle dottoggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          <i class="icondrp bi bi-three-dots-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dotmenu">
                                          <li><a class="dropdown-item a" href="#"  data-bs-toggle="modal" data-bs-target="#contactModal"><i class="icon fa-solid fa-plus"></i>Nuevo contacto</a></li>
                                          <li><a class="dropdown-item a" href="#"><i class="icon fa-solid fa-pen"></i>Cambiar nombre</a></li>
                                          <li><a class="dropdown-item a" href="#"><i class="icon fa-solid fa-trash" style="color:#d52b2baf"></i>Eliminar</a></li>
                                      </ul>
                                    </div>
                                </div>
                              @for($j=0;$j<2;$j++)
                                <div class="row person">
                                    <div class="row row-contact">
                                        <div class="dropdown dropdot d-flex align-items-center col-1" style="width:fit-content">
                                            <a class=" dropdown-toggle addContacttoggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icondrp bi bi-three-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dotmenu">
                                                <li><a class="dropdown-item a" href="#" data-bs-toggle="modal" data-bs-target="#addreqModal"><i class="icon fa-solid fa-plus"></i>Nuevo requerimiento</a></li>
                                                <li><a class="dropdown-item a" href="#" data-bs-toggle="modal" data-bs-target="#editcontactModal"><i class="icon fa-solid fa-pen"></i>Editar contacto</a></li>
                                                <li><a class="dropdown-item a" href="#"><i class="icon fa-solid fa-trash" style="color:#d52b2baf"></i>Eliminar</a></li>
                                            </ul>
                                        </div>                                 
                                        <div class="person-info" data-bs-toggle="modal" data-bs-target="#contactModal">
                                            <div class="card-subtitle text-muted d-flex align-items-end py-2">Nombre del contacto</div>
                                            <div class="status">
                                                <span class="badge badge-success">Activo</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                        @for($k=0;$k<1;$k++)
                                        <div class="row row-reque py-2 d-flex justify-content-between" >
                                            <div class="d-flex justify-content-start" style="width:100%">
                                                <div class="dropdown d-flex align-items-center col-1" style="width:fit-content">
                                                    <a class=" dropdown-toggle addReqtoggle px-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="icondrp bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dotmenu">
                                                        <li><a class="dropdown-item a" href="#"><i class="icon fa-solid fa-pen"></i>Cambiar nombre</a></li>
                                                        <li><a class="dropdown-item a" href="#"><i class="icon fa-solid fa-trash" style="color:#d52b2baf"></i>Eliminar</a></li>
                                                    </ul>
                                                </div> 
                                                <a class="py-2 requerimientos" href="/postulantes" style="width:90%" >
                                                    Ingeniero en sistemas
                                                </a>
                                            </div>           
                                        </div>
                                        @endfor    
                                </div>
                              @endfor
                            </div>
                          </div>
                    </div>
                @endfor
            </div>
        </div>
</div>