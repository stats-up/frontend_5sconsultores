<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class Users extends Component
{
    public $administradores = [];

    public function seleccionarNuevoContacto(){
        $this->dispatchBrowserEvent('swalLoading');
        $this->emit('addContactoModal', null, null);
    }
    public function seleccionarEditarContacto($id_contacto){
        $this->dispatchBrowserEvent('swalLoading');
        $this->emit('editContactoModal', $id_contacto);
    }
    public function reenviarActivacionCorreo(){
        
    }
    public function mount(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $endpint = getenv("API_URL")."/api/get_admin_accounts";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->administradores = $response->json();
    }
    public function render()
    {
        return view('livewire.administrador.users');
    }
}
