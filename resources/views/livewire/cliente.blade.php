<div class="container-fluid" style="height:100vh;background-color:#fdfdfd;">
    <div class="row head">
        <div class="col-md-12 d-flex justify-content-between top">
            <img class="responsiveImg" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
            <div class="dropdown nombrecliente">
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black">      
                    <div class="name" style="padding-right:0.5rem">{{Session::get('user')["email"]}}</div>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown"  style="margin-top:4rem" >
                    <li>
                        <a class="dropdown-item" href="/logout" style="display:flex;flex-direction:row">
                            <i class="bi bi-box-arrow-in-right" style="font-size:1.3rem;color:red;display:flex;align-items:center;padding-right:0.5rem"></i>
                            Cerrar sesión
                        </a>                        
                    </li>
                </ul>
            </div>
        </div> 
    </div>
    <div class="row  d-flex justify-content-center">
        <div class="col-md-12 d-flex justify-content-center titulo">Requerimientos</div>
        <div class="row px-4 searchrow" style="max-width:65rem;" >
            <div class="form-inline d-flex flex-row search">
                <i class="bi bi-search d-flex align-items-center"></i>
                <input onkeyup="myFunction()" id="Search" class="form-control" type="search" placeholder="Buscar" aria-label="Search" style="border:0;box-shadow:none;background-color:#fdfdfd;" >
            </div>
        </div>
    </div>
    <div class="row overflow-auto list" style="max-height:70vh;justify-content:center;">
        <div class="col" style="max-width:65rem;">
            @foreach ($requerimientos as $req)
            <div class="card row justify-content-center target">
                <div class="card-body row mx-0">
                    <div class="col-lg-9" style="height:fit-content">
                        <div class="cargo" >{{$req["nombre"]}}</div>
                        <div class="descripcion py-2">
                            {{$req["descripcion"]}}
                        </div>
                    </div>
                    <div class="col-lg-3 py-2 text-center">
                        <button class="btn-postulantes" style="width:80%;">
                            <a href="/perfiles" class="btn-post">Ver postulantes</a>
                        </button>
                    </div>
                </div>
            </div>   
            @endforeach
        </div>
    </div>
    <script>
        function myFunction() {
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