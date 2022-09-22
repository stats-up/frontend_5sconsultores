<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class AddareaModal extends Component
{
    public $id_cliente;
    public $nombre;

    protected $rules = [
        'nombre' => 'required|min:2'
    ];

    public function submit(){
        $this->validate();
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["customer_id"] = $this->id_cliente;
        $array["data"]["name"] = $this->nombre;
        $endpoint = getenv("API_URL")."/api/add_customer_area";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        return redirect()->to("/contactos?c=".$this->id_cliente);
    }

    public function mount($id_cliente){
        $this->id_cliente = $id_cliente;
    }

    public function render()
    {
        return view('livewire.administrador.addarea-modal');
    }
}
