<div class="dropdown nombrecliente">
    <a class="dropdown-toggle sesiontoggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black">      
        <div class="name" style="padding-right:0.5rem">
            <div>{{Session::get('user')["email"]}}</div>
        </div>
    </a>
    <ul class="dropdown-menu sessionmenu" aria-labelledby="navbarDropdown"  style="margin-top:4rem" >
        <li>
            <a href="#" class="dropdown-item adminacount d-flex col" style="width:fit-content" data-bs-toggle="modal" data-bs-target="#changePassMdl">
                <i class="fa-solid fa-key text-success" style="font-size:16px;color:grey;display:flex;align-items:center;padding-right:0.5rem"></i>
                Cambiar contraseña
            </a>
            <hr class="dropdown-divider">
            <a class="dropdown-item sessionitem" href="/logout" style="display:flex;flex-direction:row">
                <i class="bi bi-box-arrow-in-right" style="font-size:1.3rem;color:red;display:flex;align-items:center;padding-right:0.5rem"></i>
                Cerrar sesión
            </a>
        </li>
    </ul>
    @livewire('generic.change-password')
</div>