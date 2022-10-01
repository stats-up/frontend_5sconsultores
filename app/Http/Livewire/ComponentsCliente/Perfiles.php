<?php

namespace App\Http\Livewire\ComponentsCliente;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class Perfiles extends Component
{   
    public $perfiles = [];
    public $id_req;

    public function getallperfiles(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id_request"] = $this->id_req;
        $endpoint = getenv("API_URL")."/api/get_applicants_by_request";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        $this->perfiles = $response->json(); 
    }

    public function mount(){
        if(!isset($_GET["r"])){
            return redirect()->to("/cliente");
        }
        $this->id_req = $_GET["r"];
        $this->getallperfiles();
    }

    public function render()
    {
        return view('livewire.components-cliente.perfiles');
    }
}
