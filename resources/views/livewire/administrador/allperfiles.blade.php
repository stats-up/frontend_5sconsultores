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
        <div class="row titulo">Perfiles</div>
        <div class="row">
            <div class="col-auto btn-p" style="width:fit-content">
                <a href="/allperfiles" class="px-2" style="text-decoration:none;display:flex;align-items:center;color:white;width:100%;height:100%">
                    <i class="fa-solid fa-people-group" style="padding-right:0.5rem"></i>Perfiles</a>
            </div>
        </div>
        <div wire:ignore class="col-md-12 tabla">
            <table id="tabla-admin" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="col-3">Nombre de colaborador</th>
                        <th scope="col" class="col-3">Empresa</th>
                        <th scope="col" class="col-3">Área</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i=0;$i<6;$i++)
                        <tr>
                            <td>Nombre {{$i}}</td>
                            <td>Empresa {{$i}}</td>
                            <td>Área {{$i}}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <script>
            $(document).ready(function() {
                $('#tabla-admin').DataTable({
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
            });
        </script>
    </div>
</div>
