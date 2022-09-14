<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

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
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        return redirect()->to("/admin");
    }

    public function render()
    {
        return view('livewire.administrador.modal-cliente');
    }
}
