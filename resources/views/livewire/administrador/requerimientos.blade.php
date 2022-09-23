<div class="container-fluid" style="height:100vh;background-color:#fdfdfd;">
    <div class="row head">
        <div class="col-md-12 d-flex justify-content-between top">
            <img class="responsivelogo" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
            <ul class="nav justify-content-center align-items-center" style="color:black">
                <li class="nav-item mx-2">
                  <a class="nav-link"   href="#############################">Contactos</a>
                </li>
                <li class="nav-item activo mx-2" >
                  <a class="nav-link" href="#">Requerimientos</a>
                </li>
              </ul>
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
    <div class="row p-2">            
        <nav aria-label="breadcrumb" style="padding-left:4rem">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin" style="color:#c99616">Clientes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Requerimientos</li>
          </ol>
        </nav>
  </div>
  <livewire:administrador.editreqer-modal/>
  <livewire:administrador.requer-modal/>
    <div class="row titulo">Requerimientos</div>
    <div class="px-4 py-4">
        <button href="#" class="btn-post col-md-2" data-bs-toggle="modal" data-bs-target="#addreqModal">
            <i class="bi bi-plus"></i>Agregar nuevo perfil
        </button>
    </div>
    <div class="col-md-12 tabla">
        <table id="tabla-admin" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col" class="col-md-3">Requerimiento</th>
                    <th scope="col" class="col-md-3">Área</th>
                    <th scope="col" class="col-md-2">Contacto</th>
                    <th scope="col" class="col-md-1">Perfiles</th>
                    <th scope="col" class="col-md-1"></th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 10; $i++) <tr>
                    <td scope="row">Requerimiento  #{{20+$i}}</td>
                    <td>Area 1</td>
                    <td>Nombre Completo</td>
                    <td>
                        <button class="btn btn-primary btn-sm w-100" onclick="location.href='/postulantes'">
                                Ver postulantes
                        </button>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-secondary btn-sm w-100" data-bs-toggle="modal" data-bs-target="#editreqModal">
                            Editar
                        </button>
                    </td>
                    </tr>
                    @endfor
                    @for ($i = 0; $i < 10; $i++) <tr>
                        <td scope="row">Requerimiento #{{10+$i}}</td>
                        <td>Area 2</td>
                        <td>Nombre Completo</td>
                        <td>
                            <button class="btn btn-primary btn-sm w-100" onclick="location.href='/postulantes'">
                                Ver postulantes
                            </button>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-secondary btn-sm w-100"  data-bs-toggle="modal" data-bs-target="#editreqModal">
                                Editar
                            </button>
                        </td>
                        </tr>
                        @endfor
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#tabla-admin').DataTable({
                "ordering": true,
                "order": [],
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Filas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Filas",
                    "infoFiltered": "(Filtrado de MAX total Filas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Filas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                        }
                }
            });
        });
    </script>
</div>