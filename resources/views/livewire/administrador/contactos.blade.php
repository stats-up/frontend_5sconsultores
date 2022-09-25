<div class="container-fluid" style="height:100vh;background-color:#fdfdfd;">
    <div class="row head">
        <div class="col-md-12 d-flex justify-content-between top">
            <img class="responsivelogo" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
            @livewire('administrador.menu-cliente', ["id_cliente" => $_GET["c"]])
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
                        <a href="/cuentas" class="dropdown-item adminacount d-flex col"  style="width:fit-content" >
                            <i class="fa-solid fa-user-gear" style="font-size:16px;color:grey;display:flex;align-items:center;padding-right:0.5rem"></i>
                            Administrar cuentas</a>                       
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @livewire('administrador.addcontacto-modal')
    @livewire('administrador.editcontacto-modal', ["id_cliente" => $_GET["c"]])
    @livewire('administrador.addarea-modal', ["id_cliente" => $_GET["c"]])
    <livewire:administrador.vercontacto-modal/>
    <livewire:administrador.editarea-modal/>
    @livewire('administrador.ruta-admin', ["id_cliente" => $_GET["c"]])
    <div class="row titulo">Contactos</div>
    <div class="row btn-addempresa d-flex col justify-content-between">
        <button href="#" class="btn-post" data-bs-toggle="modal" data-bs-target="#addAreaModal">
        <i class="bi bi-plus"></i>Agregar nueva área</button>
        <div style="width:fit-content;display:flex" >
            <div class="row px-4 searchrow" style="width:fit-content;" >
                <div class="form-inline d-flex flex-row search">
                    <i class="bi bi-search d-flex align-items-center"></i>
                    <input onkeyup="search()" id="Search" class="form-control" type="search" placeholder="Buscar" aria-label="Search" style="border:0;box-shadow:none;background-color:#fdfdfd;" >
                </div>
            </div>
            <button class="filter" style="width:fit-content">
                <div class="dropdown" >
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration:none;color:black">
                        <i class="bi bi-filter">Filtrar</i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#" onclick="filter('Activo')">Activo</a></li>
                        <li><a class="dropdown-item" href="#" onclick="filter('Inactivo')">Inactivo</a></li>
                    </ul>
                </div>
            </button>                
        </div>
    </div>
    <div class="row overflow-auto" style="display:flex;justify-content:center;padding-top:1rem;max-height:70vh;padding-bottom: 5rem">
        <div class="col-12 body-contactos ">
            @foreach ($customer_areas as $item)
                @if ($item["status"] != "eliminado")
                <div class="col-md-12 py-2  target">
                    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;border:transparent" >
                        <div class="card-body" id="square">
                            <div class="row headArea px-2 d-flex justify-content-between" >
                                <h5 class="card-title py-2" style="width:fit-content">{{$item["name"]}}</h5>
                                <div class="dropdown d-flex align-items-center dropcard" style="width:fit-content">
                                    <a class=" dropdown-toggle dottoggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="icondrp bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dotmenu">
                                        <li><a wire:click="seleccionarNuevoContacto({{$item["customer"]}},{{$item["id"]}})" class="dropdown-item a" href="#" data-bs-toggle="modal" data-bs-target="#addcontactModal"><i class="icon fa-solid fa-plus"></i>Nuevo contacto</a></li>
                                        <li><a wire:click="seleccionarArea({{$item["customer"]}},{{$item["id"]}})" class="dropdown-item a" href="#" data-bs-toggle="modal" data-bs-target="#editareaModal"><i class="icon fa-solid fa-pen"></i>Cambiar nombre</a></li>
                                        <li><a class="dropdown-item a deleteArea" href="#" data="{{$item["id"]}}"><i class="icon fa-solid fa-trash" style="color:#d52b2baf"></i>Eliminar</a></li>
                                    </ul>
                                </div>
                            </div>
                            @foreach($item["accounts"] as $cuenta)
                                <div class="row person">
                                    <div class="row row-contact">
                                        <div class="dropdown dropdot d-flex align-items-center" style="width:fit-content">
                                            <a class=" dropdown-toggle addContacttoggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icondrp bi bi-three-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dotmenu">
                                                <li><a wire:click="seleccionarEditarContacto({{$cuenta["id"]}})" class="dropdown-item a" href="#" data-bs-toggle="modal" data-bs-target="#editcontactModal"><i class="icon fa-solid fa-pen"></i>Editar contacto</a></li>
                                                <li><a class="dropdown-item a" href="#"><i class="icon fa-solid fa-trash" style="color:#d52b2baf"></i>Eliminar</a></li>
                                            </ul>
                                        </div>                                 
                                        <div class="person-info"  data-bs-toggle="modal" data-bs-target="#vercontactModal">
                                            <div class="card-subtitle text-muted">{{$cuenta["nombre_completo"]}}</div>
                                            <div class="status" id="status">
                                                @if ($cuenta["estado_cuenta"] == "activa")
                                                    <span class="badge badge-success">Activo</span>
                                                @elseif($cuenta["estado_cuenta"] == "inactiva")
                                                    <span class="badge badge-warning">Inactivo</span>
                                                @elseif($cuenta["estado_cuenta"] == "eliminada")
                                                    <span class="badge badge-danger">Eliminado</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
    <script>
        function search() {
            var input = document.getElementById("Search");
            var filter = input.value.toLowerCase();
            var nodes = document.getElementsByClassName('target');

            for (i = 0; i < nodes.length; i++) {
                if (nodes[i].innerText.toLowerCase().includes(filter)) {
                nodes[i].style.display = "block";
                } else {
                nodes[i].style.display = "none";
                }
            }
        }
        function filter(name){      
            var nodes = document.getElementsByClassName('person');
            for (i = 0; i < nodes.length; i++) {
                if (nodes[i].innerText.includes(name)) {
                    nodes[i].style.display = "flex";
                } else {
                    nodes[i].style.display = "none";
                }                    
            }
        }
        $(".deleteArea").click(function(){
            let idArea = $(this).attr('data');
            Swal.fire({
                title: '¿Eliminar esta área?',
                text: "No se podrá revertir esta acción",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#959595',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('eliminarArea',idArea);
                    Swal.fire(
                    'Eliminado!',
                    'El cliente ha sido eliminado',
                    'success'
                    )
                }
            })
        });
    </script>
</div>