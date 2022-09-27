<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class VerrequerModal extends Component
{   
    public $name;
    public $contacto;
    public $descripcion;
    public $email_contacto;
    public $id_cliente;

    protected $listeners = ['verRequerimientoModal'];

    public function verRequerimientoModal($id_req){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $id_req;
        $endpint = getenv("API_URL")."/api/get_request";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->name =  $response->json()[0]["nombre"];
        $this->contacto =  $response->json()[0]["nombre_completo_cuenta_solicitante"];
        $this->descripcion =  $response->json()[0]["descripcion"];
        $this->email_contacto =  $response->json()[0]["email_cuenta_solicitante"];
        $this->id_cliente = $response->json()[0]["id_empresa"];
        $this->dispatchBrowserEvent('swalClose');
    }

    public function render()
    {
        return view('livewire.administrador.verrequer-modal');
    }
}
