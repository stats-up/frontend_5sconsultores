<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;

class ModalCliente extends Component
{   
    public $nombre;
    public $logo;

    public function nuevoCliente(){
        $endpoint = getenv("API_URL")."/api/add_customer";
        $response = Http::post($endpoint, [
            'name' => $nombre,
            'logo' => base64_encode($logo),
        ]);
    }

    public function render()
    {
        return view('livewire.administrador.modal-cliente');
    }
}
