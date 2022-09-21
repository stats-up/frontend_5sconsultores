<div class="container-fluid" style="height:100vh;background-color:#fdfdfd;">
    <div class="row head">
        <div class="col-auto btn-back ">
            <a onclick="history.back()"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <div class="col titulo">
            Administración de usuarios
        </div> 
    </div>
    <div class="searchrow">
        <button href="#" class="btn-post col-md-2" data-bs-toggle="modal" data-bs-target="#addpostulanteModal">
            <i class="bi bi-plus"></i>Agregar nuevo perfil
        </button>
    </div>
    <livewire:administrador.editcontacto-modal />
    <div class="col-md-12 tabla">
        <table id="tabla-admin" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col" class="col-md-3">Nombre completo</th>
                    <th scope="col" class="col-md-2">Correo</th>
                    <th scope="col" class="col-md-2">Telefono</th>
                    <th scope="col" class="col-md-1">Estado</th>
                    <th scope="col" class="col-md-1"></th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 10; $i++) <tr>
                    <td scope="row">Nombres Apellidos  #{{20+$i}}</td>
                    <td>Correo</td>
                    <td>Telefono</td>
                    <td>
                        <span class="badge badge-success">Activo</span>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-primary btn-sm w-100" data-bs-toggle="modal" data-bs-target="#editcontactModal">
                            Editar
                        </button>
                    </td>
                    </tr>
                    @endfor
                    @for ($i = 0; $i < 10; $i++) <tr>
                        <td scope="row">Nombres Apellidos #{{10+$i}}</td>
                        <td>Correo</td>
                        <td>Telefono</td>
                        <td>
                            <span class="badge badge-warning">Inactivo</span>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-primary btn-sm w-100"  data-bs-toggle="modal" data-bs-target="#editcontactModal">
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
