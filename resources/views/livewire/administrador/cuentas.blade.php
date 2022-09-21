<div class="container-fluid" style="height:100vh;background-color:#fdfdfd;">
    <div class="row head">
        <div class="col-auto btn-back ">
            <a onclick="history.back()"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <div class="col titulo">
            Administración de usuarios
        </div>
    </div>
    <div class="row px-4 searchrow" >
        <button href="#" class="btn-post col-md-2 mx-2" data-bs-toggle="modal" data-bs-target="#addpostulanteModal">
            <i class="bi bi-plus"></i>Agregar nuevo perfil
        </button>
        <div class="form-inline d-flex flex-row search mx-2">
            <i class="bi bi-search d-flex align-items-center"></i>
            <input onkeyup="search()" id="Search" class="form-control" type="search" placeholder="Buscar" aria-label="Search" style="border:0;box-shadow:none;background-color:#fdfdfd;" >
        </div>
    </div>
    <div class="d-flex justify-content-center section">
        <div class="row row-cols-auto group-cards overflow-auto" style="max-width:100vw;max-height:70vh">
                <div class="col-md-12" style="width:18rem">
                    <div class="card my-2" style="height:15rem">
                        <div class="card-body" style="display:flex;justify-content:space-between;flex-direction:column">
                            <div class="text-center d-flex align-items-center justify-content-center" style="display:flex;flex:1">
                                <img class="responsiveimg" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
                            </div>              
                            <div>
                                <h6 class="card-title text-muted row d-flex justify-content-center">Administadores</h6>
                                <div class="divbtn py-2">
                                    <a href="/users" class="btn btn-emp">Ver Cuentas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
                @for($i=1;$i<10;$i++)
                <div class="col-md-12" style="width:18rem">
                    <div class="card my-2" style="height:15rem">
                        <div class="card-body" style="display:flex;justify-content:space-between;flex-direction:column">
                            <div class="text-center d-flex align-items-center justify-content-center" style="display:flex;flex:1">
                                <img class="responsiveImg" src="/img/no-imagen.png" alt="Logo"  class="brandlogo">
                            </div>              
                            <div>
                                <h6 class="card-title text-muted row d-flex justify-content-center">Nombre Empresa {{$i}}</h6>
                                <div class="divbtn py-2">
                                    <a href="/users" class="btn btn-emp">Ver Cuentas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>>
        
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
    </script>
</div>

