<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class Admin extends Component
{
    public $clientes = [];

    protected $listeners = ['eliminarCliente'];

    public function get_all_clients(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $endpint = getenv("API_URL")."/api/get_customers";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->clientes = $response->json();
    }

    public function eliminarCliente($cliente){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $cliente;
        $array["data"]["status"] = "eliminado";
        $endpoint = getenv("API_URL")."/api/upd_customer_status";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        return redirect()->to("/admin");
    }

    public function selectClient($id_cliente){
        $this->emit('modalEditCliente', $id_cliente);
    }

    public function mount(){
        $this->get_all_clients();
    }

    public function render()
    {
        return view('livewire.admin');
    }
}
