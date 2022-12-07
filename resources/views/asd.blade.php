<!-- simple html snippet -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- CSS public/asd -->
        <link href="{{ asset('css/asd.css') }}" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--DATATABLES-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/b-2.0.1/fh-3.2.0/r-2.2.9/datatables.min.css" />
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/b-2.0.1/fh-3.2.0/r-2.2.9/datatables.min.js"></script>
        <style>
            #tabla-admin-perfiles_wrapper>.row {
                margin-bottom: 6px;
            }

            #tabla-admin-clientes_wrapper>.row {
                margin-bottom: 6px;
            }
        </style>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>

    <body class="">
        <div class="container">
            <div id="login-div" class="row m-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="text-center">
                        <div class="card-body">
                            <img src="img/Logo_5s_web.jpg" alt="Logo">
                            <br>
                            <span class="text-muted" style="">
                                <i>Solo los usuarios con privilegios pueden ingresar.</i>
                            </span>
                            <hr>
                            <h4 class="text-muted">Ingreso por Gmail</h4>
                            <img src="https://miro.medium.com/max/1158/1*idMJ5mZ23CF-CFJyShjHcg.png" alt="login" style="width: 50%">
                            <hr>
                            <h4 class="text-muted">Ingreso por correo y constraseña</h4>
                            <form class="text-start">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="micorreo@sitio.dom">
                                    <div id="emailHelp" class="form-text">Nunca utilizaremos los correos con fines comerciales.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="********">
                                    <div id="emailHelp" class="form-text">Contraseña proporcionada por 5S Consultores</div>
                                </div>
                                <button id="loginbutton" type="button" class="btn btn-5s" style="width: 100%">Ingresar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-div" class="row m-5" style="display: none">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="text-muted">Bienvenido a 5S Consultores
                                <br>
                                <i>(Esta vista es sólo en modo de pruebas)</i>
                            </h4>
                            <hr>
                            <h4 class="text-muted">¿Qué deseas hacer?</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <button id="admin-button" type="button" class="btn btn-5s" style="width: 100%">Ingresar como Administrador</button>
                                </div>
                                <div class="col-md-6">
                                    <button id="client-button" type="button" class="btn btn-5s" style="width: 100%">Ingresar como Cliente</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="admin-div" class="row" style="margin: 0px;display: none;">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-white mb-3" style="border-bottom-style: groove; border-width: 1px;border-color: #ffffff57;">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="img/Logo_5s_web.jpg" alt="Logo" style="max-height: 60px;margin-top: -24px;margin-bottom: -14px;"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a id="admin-nav-perfiles" class="nav-link" href="#">Perfiles</a>
                                </li>
                                <li class="nav-item">
                                    <a id="admin-nav-clientes" class="nav-link" href="#">Clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a id="admin-nav-indicadores" class="nav-link" aria-current="page" href="#">Indicadores</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="container">
                    <div id="admin-perfiles" class="row">
                        <div class="col-md-6">
                            <h2 class="mb-3">Perfiles</h2>
                        </div>
                        <div class="col-md-6">
                            <div class="text-end">
                                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modalAddPerfil">
                                    <i class="fas fa-user-plus"></i>
                                </button>
                                <div class="modal fade" id="modalAddPerfil" tabindex="-1" aria-labelledby="modalAddPerfilLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalAddPerfilLabel">Nuevo Perfil</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Para la Empresa</label>
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected>Seleccione...</option>
                                                                <option value="1">Empresa #1</option>
                                                                <option value="2">Empresa #2</option>
                                                                <option value="3">Empresa #3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Requerimiento</label>
                                                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Requerimiento">
                                                            <datalist id="datalistOptions">
                                                                <option value="Solicitud de: Ingeniero en Minas">
                                                                <option value="Solicitud de: Geologo">
                                                                <option value="Solicitud de: ...">
                                                            </datalist>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nombre Completo</label>
                                                            <input type="text" class="form-control" placeholder="Juanito Perez">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Rut</label>
                                                            <input type="text" class="form-control" placeholder="XX.XXX.XXX-X">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Fecha nacimiento</label>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Sexo</label>
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected>Seleccione...</option>
                                                                <option value="1">Femenino</option>
                                                                <option value="2">Masculino</option>
                                                                <option value="3">Otro</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Ciudad de Residencia</label>
                                                            <input type="text" class="form-control" placeholder="Ej: Santiago">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Dirección</label>
                                                            <input type="text" class="form-control" placeholder="Calle #XXXX - Det #Depto/Casa">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Descripción del perfil</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Video de presentación (youtube link/url)</label>
                                                            <input type="url" class="form-control" placeholder="https://www.youtube.com/watch?v=...">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">
                                                                Adjuntar PDF
                                                                <span class="text-secondary">opcional</span>
                                                            </label>
                                                            <input class="form-control" type="file" id="formFile">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary">Agregar Perfil</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-12">
                            <table id="tabla-admin-perfiles" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre completo</th>
                                        <th scope="col">Rut</th>
                                        <th scope="col">Postulante para</th>
                                        <th scope="col">Fecha de inscripción</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < 10; $i++) <tr>
                                        <td scope="row">Nombres Apellidos #{{20+$i}}</td>
                                        <td>Rut #{{20+$i}}</td>
                                        <td>Empresa B</td>
                                        <td>20/06/2022</td>
                                        <td>
                                            <span class="badge text-bg-success">Contratado</span>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-primary btn-sm w-100">
                                                Editar Perfil
                                            </button>
                                        </td>
                                        </tr>
                                        @endfor
                                        @for ($i = 0; $i < 10; $i++) <tr>
                                            <td scope="row">Nombres Apellidos #{{10+$i}}</td>
                                            <td>Rut #{{10+$i}}</td>
                                            <td>Empresa B</td>
                                            <td>20/06/2022</td>
                                            <td>
                                                <span class="badge text-bg-secondary">No Contratado</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-primary btn-sm w-100">
                                                    Editar Perfil
                                                </button>
                                            </td>
                                            </tr>
                                            @endfor
                                            @for ($i = 0; $i < 10; $i++) <tr>
                                                <td scope="row">Nombres Apellidos #{{$i}}</td>
                                                <td>Rut #{{$i}}</td>
                                                <td>Empresa A</td>
                                                <td>23/08/2022</td>
                                                <td>
                                                    <span class="badge text-bg-warning">Pendiente</span>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-primary btn-sm w-100">
                                                        Editar Perfil
                                                    </button>
                                                </td>
                                                </tr>
                                                @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="admin-clientes" class="row" style="display: none;">
                        <div class="col-md-6">
                            <h2 class="mb-3">Clientes</h2>
                        </div>
                        <div class="col-md-6">
                            <div class="text-end">
                                <button class="btn btn-success">
                                    <i class="fas fa-user-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-12">
                            <table id="tabla-admin-clientes" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre Empresa</th>
                                        <th scope="col">Rut Empresa</th>
                                        <th scope="col">Contacto</th>
                                        <th scope="col">Fono Contacto</th>
                                        <th scope="col">Email Contacto</th>
                                        <th scope="col">Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < 10; $i++) <tr>
                                        <td scope="row">Nombre Empresa #{{$i}}</td>
                                        <td>Rut Empresa #{{$i}}</td>
                                        <td>Contacto #{{$i}}</td>
                                        <td>Fono Contacto</td>
                                        <td>Email Contacto</td>
                                        <td class="text-center">
                                            <button class="btn btn-primary btn-sm w-100">
                                                Editar Cliente
                                            </button>
                                        </td>
                                        </tr>
                                        @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="admin-indicadores" class="row" style="display: none">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    Contratos de los últimos días
                                </div>
                                <div class="card-body">
                                    <canvas id="line-chart" width="800" height="372"></canvas>
                                </div>
                                <script>
                                    new Chart(document.getElementById("line-chart"), {
                                    type: 'line',
                                    data: {
                                        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre"],
                                        //labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
                                        datasets: [{ 
                                            data: [8,11,10,10,10,11,13,22,8,24],
                                            label: "Cliente 1",
                                            borderColor: "#3e95cd",
                                            fill: false
                                        }, { 
                                            data: [28,35,41,50,63,80,94,14,37,52],
                                            label: "Cliente 2",
                                            borderColor: "#8e5ea2",
                                            fill: false
                                        }, { 
                                            data: [16,17,17,19,20,27,40,54,67,73],
                                            label: "Cliente 3",
                                            borderColor: "#3cba9f",
                                            fill: false
                                        }, { 
                                            data: [40,20,10,16,24,38,74,16,50,78],
                                            label: "Cliente 4",
                                            borderColor: "#e8c3b9",
                                            fill: false
                                        }, { 
                                            data: [6,3,2,2,7,26,82,17,31,43],
                                            label: "Cliente 5",
                                            borderColor: "#c45850",
                                            fill: false
                                        }
                                        ]
                                    },
                                    options: {
                                        title: {
                                        display: true,
                                        text: 'World population per region (in millions)'
                                        }
                                    }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="client-div" class="row" style="margin: 0px;display: none;">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-white" style="border-bottom-style: groove; border-width: 1px;border-color: #ffffff57;">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="img/Logo_5s_web.jpg" alt="Logo" style="max-height: 60px;margin-top: -24px;margin-bottom: -14px;"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Perfiles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Mis Contratos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="container mt-2">
                    <h3 class="text-center text-secondary">Postulantes para el Cargo A123</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://cdn.pixabay.com/photo/2015/11/03/08/55/construction-workers-1019789_960_720.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Nombres y apellidos</h5>
                                    <p class="card-text">Prequeña descripción, rubro, años de experiencia respecto al Perfil postulado</p>
                                    <a href="#" class="btn btn-primary w-100 trg-modal" data-bs-toggle="modal" data-bs-target="#modalViewPerfil">Ver más Información</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://cdn.pixabay.com/photo/2016/11/15/09/24/builders-1825689_960_720.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Nombres y apellidos</h5>
                                    <p class="card-text">Prequeña descripción, rubro, años de experiencia respecto al Perfil postulado</p>
                                    <a href="#" class="btn btn-primary w-100 trg-modal" data-bs-toggle="modal" data-bs-target="#modalViewPerfil">Ver más Información</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://cdn.pixabay.com/photo/2015/11/03/09/10/craftsmen-1020156_960_720.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Nombres y apellidos</h5>
                                    <p class="card-text">Prequeña descripción, rubro, años de experiencia respecto al Perfil postulado</p>
                                    <a href="#" class="btn btn-primary w-100 trg-modal" data-bs-toggle="modal" data-bs-target="#modalViewPerfil">Ver más Información</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://cdn.pixabay.com/photo/2016/11/18/12/05/white-male-1834101_960_720.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Nombres y apellidos</h5>
                                    <p class="card-text">Prequeña descripción, rubro, años de experiencia respecto al Perfil postulado</p>
                                    <a href="#" class="btn btn-primary w-100 trg-modal" data-bs-toggle="modal" data-bs-target="#modalViewPerfil">Ver más Información</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://cdn.pixabay.com/photo/2015/10/30/12/12/teacher-1013890_960_720.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Nombres y apellidos</h5>
                                    <p class="card-text">Prequeña descripción, rubro, años de experiencia respecto al Perfil postulado</p>
                                    <a href="#" class="btn btn-primary w-100 trg-modal" data-bs-toggle="modal" data-bs-target="#modalViewPerfil">Ver más Información</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://cdn.pixabay.com/photo/2016/11/11/10/11/architect-1816217_960_720.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Nombres y apellidos</h5>
                                    <p class="card-text">Prequeña descripción, rubro, años de experiencia respecto al Perfil postulado</p>
                                    <a href="#" class="btn btn-primary w-100 trg-modal" data-bs-toggle="modal" data-bs-target="#modalViewPerfil">Ver más Información</a>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modalViewPerfil" tabindex="-1" aria-labelledby="modalAddPerfilLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalAddPerfilLabel">Perfil Nombres y Apellidos</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/ThiCMd5kGbE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Descripción del perfíl</h5>
                                                        <p class="card-text">
                                                            <span>
                                                                El Ingeniero en Minas posee conocimientos en las áreas de exploración y explotación, supervisión de
                                                                procesos asociadas al desarrollo de cada etapa involucrada en el ciclo minero, como también en la
                                                                planificación, administración y gestión de proyectos mineros. Su formación en materias relativas a
                                                                Ciencias de la Tierra como base para la operación minero metalúrgica en faenas ya sea subterránea o
                                                                de cielo abierto complementan el desarrollo de habilidades y destrezas para el quehacer profesional
                                                                que lo capacitan para gestión proyectos mineros en las etapas de prospección, arranque, carguío,
                                                                transporte y procesamiento de minerales.
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-4">
                                                <iframe src="https://www.uv.mx/dgdaie/files/2012/11/CPP-DC-Angulo-Rasco-A-que-llamamos-curriculum.pdf" frameborder="0"  width="100%" height="500px"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Solicitar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function() {
            $('#tabla-admin-perfiles').DataTable({
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
            $('#tabla-admin-clientes').DataTable({
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
            $('#exampleInputEmail1').focus();
            // on click loginbutton  fade out login-div and fade in main-div
            $('#loginbutton').click(function() {
                $('#login-div').fadeOut(function() {
                    $('#main-div').fadeIn();
                });
            });
            // on click admin-button fade out main-div and fade in admin-div
            $('#admin-button').click(function() {
                $('#main-div').fadeOut(function() {
                    $('body').removeClass('bg-5s');
                    $('#admin-div').fadeIn();
                });
            });
            // on click client-button fade out main-div and fade in client-div
            $('#client-button').click(function() {
                $('#main-div').fadeOut(function() {
                    //remove body class
                    $('body').removeClass('bg-5s');
                    $('#client-div').fadeIn();
                });
            });
            $('#admin-nav-perfiles').click(function(){
                $('#admin-indicadores').fadeOut(function(){
                    $('#admin-perfiles').fadeIn();
                });

            });
            $('#admin-nav-indicadores').click(function(){
                $('#admin-clientes').fadeOut(function(){
                    $('#admin-indicadores').fadeIn();
                });
            });
            $("#admin-nav-clientes").click(function(){
                $('#admin-perfiles').fadeOut(function(){
                    $("#admin-clientes").fadeIn();
                });
            })
        });
    </script>

</html>