<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class EditareaModal extends Component
{
    public $id_cliente;
    public $id_area;
    public $nombre;
    protected $listeners = ['modalEditarArea'];

    protected $rules = [
        'nombre' => 'required|min:2'
    ];

    public function modalEditarArea($id_cliente,$id_area){
        $this->id_cliente = $id_cliente;
        $this->id_area = $id_area;
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $id_area;
        $endpint = getenv("API_URL")."/api/get_customer_area";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->nombre =  $response->json()[0]["name"];
        $this->dispatchBrowserEvent('swalClose');
    }

    public function submit(){
        $this->validate();
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $this->id_area;
        $array["data"]["name"] = $this->nombre;
        $endpoint = getenv("API_URL")."/api/upd_customer_area";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        return redirect()->to("/contactos?c=".$this->id_cliente);
    }

    public function render()
    {
        return view('livewire.administrador.editarea-modal');
    }
}
