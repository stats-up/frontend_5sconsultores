<div class="container-fluid">
    <div class="row head d-flex justify-content-center">
        <div class="col-md-12 top d-flex justify-content-between">
            <img class="responsivelogo" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
            <div class="dropdown nombrecliente">
                <a class="dropdown-toggle sesiontoggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black">      
                    <div class="name" style="padding-right:0.5rem">{{Session::get('user')["email"]}}</div>
                </a>
                <ul class="dropdown-menu sessionmenu" aria-labelledby="navbarDropdown"  style="margin-top:4rem" >
                    <li>
                        <a href="/cuentas" class="dropdown-item adminacount d-flex col"  style="width:fit-content" >
                            <i class="fa-solid fa-user-gear" style="font-size:16px;color:grey;display:flex;align-items:center;padding-right:0.5rem"></i>
                            Administrar cuentas
                        </a>
                        <a class="dropdown-item sessionitem" href="/logout" style="display:flex;flex-direction:row">
                            <i class="bi bi-box-arrow-in-right" style="font-size:1.3rem;color:red;display:flex;align-items:center;padding-right:0.5rem"></i>
                            Cerrar sesión
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row p-2">            
            <nav aria-label="breadcrumb" style="padding-left:4rem">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin" style="color:#c99616">Clientes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Todos los perfiles</li>
                </ol>
            </nav>
        </div>
        <div class="row titulo">Perfiles</div>
        <div class="row">
            <div class="col-auto btn-p" style="width:fit-content">
                <a href="/allperfiles" class="px-2" style="text-decoration:none;display:flex;align-items:center;color:white;width:100%;height:100%">
                    <i class="fa-solid fa-people-group" style="padding-right:0.5rem"></i>Perfiles</a>
            </div>
        </div>
        <div wire:ignore class="col-md-12 tabla table-responsive">
            <table id="tabla-admin" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Rut</th>
                        <th>Sexo</th>
                        <th>Ciudad</th>
                        <th>Comuna</th>
                        <th>Dirección</th>
                        <th>Área de trabajo</th>
                        <th>Video de presentación</th>
                        <th>Requerimiento</th>
                        <th>Nombre solicitante</th>
                        <th>Email solicitante</th>
                        <th>Telefono solicitante</th>
                        <th>Cliente</th>
                        <th>Fecha de registro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applicants as $applicant)
                    <tr>
                        <td>{{$applicant["nombre_completo"]}}</td>
                        <td>{{$applicant["rut"]}}</td>
                        <td>{{$applicant["genero"]}}</td>
                        <td>{{$applicant["ciudad"]}}</td>
                        <td>{{$applicant["comuna"]}}</td>
                        <td>{{$applicant["direccion"]}}</td>
                        <td>{{$applicant["nombre_area_postulante"]}}</td>
                        <td>{{$applicant["youtube_url"]}}</td>
                        <td>{{$applicant["nombre_requerimiento"]}}</td>
                        <td>{{$applicant["nombre_solicitante"]}}</td>
                        <td>{{$applicant["email_solicitante"]}}</td>
                        <td>{{$applicant["telefono_solicitante"]}}</td>
                        <td>{{$applicant["nombre_cliente"]}}</td>
                        <td>{{$applicant["fecha_ingreso"]}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script>
            $(document).ready(function() {
                $('#tabla-admin').DataTable({
                    "dom" : 'Blfrtip',
                    "buttons": {
                        "buttons": [
                            { extend: 'excel', className: 'btn btn-primary mb-2', text: "Descargar Excel (xlsx)" }
                        ]
                    },
                    "ordering": true,
                    "order": [[2,"desc"]],
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
                $(".buttons-excel").removeClass("btn-secondary");
            });
        </script>
    </div>
</div>
