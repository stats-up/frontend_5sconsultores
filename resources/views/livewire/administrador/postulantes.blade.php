<div class="container-fluid" style="height:100vh;background-color:#fdfdfd;">
    <div class="row head">
        <div class="col-md-12 d-flex justify-content-between top">
            <img class="responsivelogo" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
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
                            Administrar cuentas
                        </a>                 
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row p-2">            
        <nav aria-label="breadcrumb" style="padding-left:4rem">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin" style="color:#c99616">Clientes</a></li>
                <li class="breadcrumb-item"><a href="/requerimientos" style="color:#c99616">Requerimientos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Perfiles</li>
            </ol>
        </nav>
    </div>
    <livewire:administrador.editpostulante-modal/>
    <livewire:administrador.verpostulante-modal/>
    <livewire:administrador.addpostulante-modal/>
    <div class="col-md-12 d-flex justify-content-center titulo">Perfiles</div>
    <div class="head">
        <div class="row d-flex col justify-content-between" style=";margin-left:8rem;margin-bottom:1rem;margin-right:8rem">
            <button href="#" class="btn-post col-md-2" data-bs-toggle="modal" data-bs-target="#addpostulanteModal">
                <i class="bi bi-plus"></i>Agregar nuevo perfil
            </button>
            <div style="width:fit-content;display:flex" class="col-md-6" >
                <div class="row px-4 searchrow" style="width:fit-content;" >
                    <div class="form-inline d-flex flex-row search">
                        <i class="bi bi-search d-flex align-items-center"></i>
                        <input onkeyup="search()" id="Search" class="form-control" type="search" placeholder="Buscar" aria-label="Search" style="border:0;box-shadow:none;background-color:#fdfdfd;" >
                    </div>
                </div>             
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center section">
        <div class="row row-cols-auto group-cards overflow-auto d-flex justify-content-center" style="max-width:100%;max-height:65vh">
            @for($i=0;$i<10;$i++)
                <div class="col py-2">
                    <div class="card target" style="width:23rem;height:32rem;">
                        <div class="dropdown d-flex align-items-start dropdot" >
                            <a class=" dropdown-toggle dottoggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="icondrp bi bi-three-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dotmenu">
                            <li><a  class="dropdown-item a" href="#" data-bs-toggle="modal" data-bs-target="#editpostulanteModal" ><i class="icon fa-solid fa-pen  px-2" style="color:grey"></i>Editar</a></li>
                            <li><a class="dropdown-item a deleteProfile"  href="#"><i class="icon fa-solid fa-trash px-2" style="color:#d52b2baf"></i>Eliminar</a></li>
                            </ul>
                        </div>
                        <div class="card-body" style="display:flex;justify-content:space-between;flex-direction:column">
                            <div class="d-flex justify-content-center align-items-center" style="display:flex;flex:1">
                                <img class="responsiveImg" src="https://wac-cdn.atlassian.com/es/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=531" alt="Logo"  class="brandlogo">
                            </div>
                            <div class=" py-4">
                                <h5 class="card-title">Nombre Completo</h5>
                                <p class="card-text">El Ingeniero en Minas posee conocimientos en las áreas de exploración y explotación, supervisión de
                                    procesos asociadas al desarrollo de cada etapa involucrada en el ciclo minero, como también en la
                                    planificación, administración y gestión de proyectos mineros. Su formación en materias relativas a
                                    Ciencias de la Tierra como base para la operación minero metalúrgica en faenas ya sea subterránea o
                                    de cielo abierto complementan el desarrollo de habilidades y destrezas para el quehacer profesional
                                    que lo capacitan para gestión proyectos mineros en las etapas de prospección, arranque, carguío,
                                    transporte y procesamiento de minerales.</p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#verperfilModal" class="btn btn-emp">Ver vista previa</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endfor
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
            $(".deleteProfile").click(function(){
            let idArea = $(this).attr('data');
            Swal.fire({
                title: '¿Eliminar este perfil?',
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