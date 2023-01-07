<div class="container-fluid" style="height:100vh;background-color:#fdfdfd;">
    <div class="row head d-flex justify-content-center">
        <div class="col-md-12 top d-flex justify-content-between">
            <img class="responsivelogo" src="img/Logo_5s_web.jpg" alt="Logo" class="brandlogo">
            <div class="nav_back">
                <ul class="nav justify-content-center align-items-center">
                    <li class="nav-item mx-2">
                      <a class="nav-link activo" href="/admin">Volver</a>
                    </li>
                </ul>
            </div>
            @livewire('administrador.admin-menu-dropdown')
        </div>
        <div class="col titulo">
            Administración de cuentas administrativas
        </div>
        @livewire('administrador.addcontacto-modal')
        @livewire('administrador.editcontacto-modal', ["id_cliente" => null])
        <div class="searchrow">
            <button wire:click="seleccionarNuevoContacto" href="#" class="btn-post col-md-2 my-3" data-bs-toggle="modal" data-bs-target="#addcontactModal">
                <i class="bi bi-plus"></i>Agregar nuevo administrador
            </button>
        </div>
        <div wire:ignore class="col-md-12 tabla">
            <table id="tabla-admin" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col" >Nombre completo</th>
                        <th scope="col" >Correo</th>
                        <th scope="col" class="col-md-2">Estado</th>
                        <th scope="col" class="col-md-1"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($administradores as $admin)
                        <tr>
                            <td>{{$admin["nombre_completo"]}}</td>
                            <td>{{$admin["email"]}}</td>
                            <td class="text-center">
                                @if ($admin["estado_cuenta_clave"] == "no activa")
                                    <button wire:click="reenviarActivacionCorreo('{{$admin["email"]}}','{{$admin["nombre_completo"]}}')" class="btn btn-warning btn-sm loadingClick">Reenviar correo de activación</button>
                                @else
                                    <button class="btn btn-success btn-sm" disabled>Cuenta Activa</button>
                                @endif
                            </td>
                            <td class="text-center">
                                <button wire:click="seleccionarEditarContacto({{$admin["id"]}})" class="btn btn-primary btn-sm w-100" data-bs-toggle="modal" data-bs-target="#editcontactModal">
                                    Editar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(".loadingClick").click(function(){
            Swal.fire({
                title: 'Cargando...',
                text: 'Espere un momento',
                showConfirmButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                onBeforeOpen: () => {
                    Swal.showLoading()
                }
            });
        });
        window.addEventListener('correoActivacionEnviado', event => {
            Swal.fire({
                icon: 'success',
                title: 'Correo de activación enviado',
                text: 'Se ha enviado un correo de activación a la cuenta del administrador',
                showConfirmButton: false,
                timer: 3000
            })
        });
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
        $(".deleteUser").click(function(){
            let idArea = $(this).attr('data');
            Swal.fire({
                title: '¿Eliminar este usuario?',
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