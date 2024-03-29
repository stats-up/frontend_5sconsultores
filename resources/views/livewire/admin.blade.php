<div class="container-fluid"  style="height:100vh;background-color:#fdfdfd;">
    <div class="row head d-flex justify-content-center">
        <div class="col-md-12 top d-flex justify-content-between">
            <img class="responsivelogo" src="img/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
            @livewire('administrador.admin-menu-dropdown')
        </div>
        <div class="row titulo">Clientes</div>
        <div class="row buttons">
            <div class="col-auto btn-p" style="width:fit-content">
                <a href="/allperfiles" style="text-decoration:none;display:flex;align-items:center;color:white;width:100%;height:100%">
                    <i class="fa-solid fa-people-group" ></i>
                    <div style="padding-left:0.5rem" class="text-btn">Candidatas</div>    
                </a>
            </div>
            <div class="col-auto" style="width:fit-content">
                <button href="#" class="btn-post" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus"></i>Agregar nuevo cliente</button>
            </div>
        </div>
        <livewire:administrador.modal-cliente/>
        @livewire('administrador.modal-editcliente')
    </div>
    <div class="d-flex justify-content-center section">
        <div class="row row-cols-auto group-cards overflow-auto" style="max-width:75rem;max-height:70vh">
            @foreach ($clientes as $row)
                @if ($row["status"] != "eliminado")
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
                                <div class="dropdown d-flex align-items-start dropdot" >
                                    <a class=" dropdown-toggle dottoggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="icondrp bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dotmenu">
                                    <li><a wire:click="selectClient({{$row["id"]}})" class="dropdown-item a" href="#" data-bs-toggle="modal" data-bs-target="#editModal"><i class="icon fa-solid fa-pen"></i>Editar</a></li>
                                    <li><a class="dropdown-item a deleteClient" data="{{$row["id"]}}" href="#"><i class="icon fa-solid fa-trash" style="color:#d52b2baf"></i>Eliminar</a></li>
                                    </ul>
                                </div>
                                    <div class="text-center">
                                        @if ($row["logo_base64"] != null)    
                                        <img class="responsiveImg" src="{{$row["logo_base64"]}}" alt="Logo"  class="brandlogo">
                                        @else
                                        <img class="responsiveImg" src="/img/no-imagen.png" alt="Logo"  class="brandlogo">
                                        @endif
                                    </div>     
                                    <div>
                                        <h6 class="card-title text-muted row">{{$row["name"]}}</h6>
                                    </div>
  
                            </div>
                          <div class="divbtn py-2">
                            <a href="/contactos?c={{$row["id"]}}" class="btn btn-emp">Administrar</a>
                          </div>
                        </div>
                    </div>
                </div>
                @endif
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