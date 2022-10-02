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

    private function getRequest(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $this->id_req;
        $endpoint = getenv("API_URL")."/api/get_request";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        if($response->json() != null){
            return $response->json()[0];
        }
        return null;
    }

    public function seleccionarVerPostulanteModal($id_applicant){
        $this->dispatchBrowserEvent('swalLoading');
        $this->emit('verPostulanteClienteModal', $id_applicant);
    }

    public function mount(){
        if(!isset($_GET["r"])){
            return redirect()->to("/cliente");
        }
        $this->id_req = $_GET["r"];
        $req = $this->getRequest();
        if($req == null){
            return redirect()->to("/cliente");
        }elseif($req["estado_requerimiento"] != "activo"){
            return redirect()->to("/cliente");
        }
        if(Session::get('user')["id"] != $req["id_cuenta_solicitante"]){
            return redirect()->to("/cliente");
        }
        $this->getallperfiles();
    }

    public function render()
    {
        return view('livewire.components-cliente.perfiles');
    }
}
