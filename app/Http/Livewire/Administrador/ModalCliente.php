<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;

class ModalCliente extends Component
{   
    public $nombre;
    public $logo;

    public function nuevoCliente(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["name"] = $this->nombre;
        $array["data"]["logo"] = base64_encode($this->logo);
        $endpoint = getenv("API_URL")."/api/add_customer";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
    }

    public function render()
    {
        return view('livewire.administrador.modal-cliente');
    }
}
