<livewire:administrador.modal-cliente/>
<div class="container-fluid"  style="height:100vh;background-color:#fdfdfd;">
    <div class="row head d-flex justify-content-center">
        <div class="col-md-12 top d-flex justify-content-between">
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
        <div class="row titulo">Clientes</div>
        <div class="row btn-addempresa" style="max-width:80rem;">
                <button href="#" class="btn-post" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus"></i>Agregar nuevo cliente</button>
        </div>
    </div>
    <div class="d-flex justify-content-center section">
        <div class="row row-cols-auto group-cards overflow-auto" style="max-width:75rem;max-height:70vh">
            @for ($i = 0; $i < 7; $i++)
            <div class="col-md-12" style="width:18rem">
                <div class="card my-2">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title col-10"> Nombre empresa</h5>
                            <div class="dropdown col-2">
                                <a class=" dropdown-toggle dottoggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="icondrp bi bi-three-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dotmenu">
                                <li><a class="dropdown-item a" href="#"><i class="icon fa-solid fa-pen"></i>Editar</a></li>
                                <li><a class="dropdown-item a" href="#"><i class="icon fa-solid fa-trash" style="color:#d52b2baf"></i>Eliminar</a></li>
                                </ul>
                            </div>
                        </div>
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

