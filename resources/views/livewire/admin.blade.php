<livewire:administrador.modal-cliente/>
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<div class="container-fluid"  style="height:100vh;background-color:#fdfdfd;">
    <div class="row head d-flex justify-content-center">
        <div class="col-md-12 top">
            <img class="responsiveImg" src="http://5sconsultores.cl/portal/wp-content/uploads/2019/11/Logo_5s_web.jpg" alt="Logo"  class="brandlogo">
        </div>
        <div class="row titulo">Clientes</div>
        <div class="row btn-addempresa" style="max-width:80rem;">
                <button href="#" class="btn-post" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus"></i>Agregar nuevo cliente</button>
        </div>
    </div>
    <div class="d-flex justify-content-center section">
        <div class="row row-cols-auto group-cards overflow-auto" style="max-width:75rem;max-height:70vh">
            @for ($i = 0; $i < 7; $i++)
            <div class="col-md-12" style="width:18rem">
                <div class="card my-2">
                    <div class="card-body">
                      <h5 class="card-title">Nombre empresa nombre empresa</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="divbtn">
                        <a href="/contactos" class="btn btn-emp">Ver Contactos</a>
                      </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    
</div>

