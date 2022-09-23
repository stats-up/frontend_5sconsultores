<div class="container-fluid"  style="height:100vh;background-color:#fdfdfd;">
    <div class="row head d-flex justify-content-center">
        <div class="col-md-12 top d-flex justify-content-between">
            <img class="responsivelogo" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
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
                        <a href="/cuentas" class="dropdown-item adminacount d-flex col"  style="width:fit-content" >
                            <i class="fa-solid fa-user-gear" style="font-size:16px;color:grey;display:flex;align-items:center;padding-right:0.5rem"></i>
                            Administrar cuentas</a>                       
                    </li>
                </ul>
            </div>
        </div>
        <div class="row titulo">Clientes</div>
        <div class="row btn-addempresa" style="max-width:80rem;">
            <button href="#" class="btn-post" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-plus"></i>Agregar nuevo cliente</button>
        </div>
        <livewire:administrador.modal-cliente/>
        @livewire('administrador.modal-editcliente')
    </div>
    <div class="d-flex justify-content-center section">
        <div class="row row-cols-auto group-cards overflow-auto" style="max-width:75rem;max-height:70vh">
            @foreach ($clientes as $row)
            <div class="col-md-12" style="width:18rem">
                <div class="card my-2" style="height:15rem">
                    <div class="card-body">
                        <div class="row">
                            @if ($row["status"] == "activo")
                                <span class="badge badge-success">Activo</span>
                            @elseif($row["status"] == "inactivo")
                                <span class="badge badge-warning">Inactivo</span>
                            @elseif($row["status"] == "eliminado")
                                <span class="badge badge-danger">Eliminado</span>
                            @endif
                            <div class="text-center d-flex align-items-center justify-content-center" style="min-height: 6rem;">
                                @if ($row["logo_base64"] != null)    
                                <img class="responsiveImg" src="{{$row["logo_base64"]}}" alt="Logo"  class="brandlogo">
                                @else
                                <img class="responsiveImg" src="/img/no-imagen.png" alt="Logo"  class="brandlogo">
                                @endif
                            </div>        
                            <div class="dropdown d-flex align-items-start dropdot" >
                                <a class=" dropdown-toggle dottoggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="icondrp bi bi-three-dots-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dotmenu">
                                <li><a wire:click="selectClient({{$row["id"]}})" class="dropdown-item a" href="#" data-bs-toggle="modal" data-bs-target="#editModal"><i class="icon fa-solid fa-pen"></i>Editar</a></li>
                                <li><a class="dropdown-item a deleteClient" data="{{$row["id"]}}" href="#"><i class="icon fa-solid fa-trash" style="color:#d52b2baf"></i>Eliminar</a></li>
                                </ul>
                            </div>
                            <div>
                                <h6 class="card-title text-muted row d-flex justify-content-center">{{$row["name"]}}</h6>
                            </div>
                        </div>
                      <div class="divbtn py-2">
                        <a href="/contactos?c={{$row["id"]}}" class="btn btn-emp">Administrar</a>
                      </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script>
        $(".deleteClient").click(function(){
            let idCustomer = $(this).attr('data');
            Swal.fire({
                title: '¿Eliminar este cliente?',
                text: "No se podrá revertir esta acción",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#959595',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('eliminarCliente',idCustomer);
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