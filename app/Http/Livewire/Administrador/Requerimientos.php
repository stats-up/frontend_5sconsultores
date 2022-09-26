<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Requerimientos extends Component
{
    public $id_cliente;
    public $request = [];

    public function get_all_request(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id_customer"] = $this->id_cliente;
        $endpoint = getenv("API_URL")."/api/get_requests_by_id_customer";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        $this->request = $response->json();
        $this->get_account();
    }

    private function get_account(){
        $aux = $this->request;
        $index = 0;
        foreach($aux as $req){
            $token = getenv("API_TOKEN");
            $array["token"] = $token;
            $array["data"]["id"] = $req["id_cuenta_solicitante"];
            $endpoint = getenv("API_URL")."/api/get_account";
            $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
            $aux[$index]["area"] = $response->json()[0]["area_empresa"];
            $index++;
        }
        $this->request = $aux;
    }

    public function mount(){
        if(!isset($_GET["c"])){
            return redirect()->to("/admin");
        }
        $this->id_cliente = $_GET["c"];
        $this->get_all_request($this->id_cliente);
    }

    public function render()
    {
        return view('livewire.administrador.requerimientos');
    }
}
