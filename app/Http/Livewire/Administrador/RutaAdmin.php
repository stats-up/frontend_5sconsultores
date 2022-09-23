<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class RutaAdmin extends Component
{
    public $nombre_cliente;

    public function mount($id_cliente){
        $this->getCliente($id_cliente);
    }

    private function getCliente($id_cliente){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $id_cliente;
        $endpint = getenv("API_URL")."/api/get_customer";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->nombre_cliente = $response->json()[0]["name"];
    }

    public function render()
    {
        return view('livewire.administrador.ruta-admin');
    }
}
