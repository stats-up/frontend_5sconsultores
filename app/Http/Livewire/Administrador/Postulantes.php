<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Postulantes extends Component
{
    public $id_client;
    public $id_request;
    public $applicants = [];

    private function get_applicants(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id_request"] = $this->id_request;
        $endpoint = getenv("API_URL")."/api/get_applicants_by_request";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        $this->applicants = $response->json();
    }

    public function seleccionarVistaPreviaModal($id_applicant){
        $this->dispatchBrowserEvent('swalLoading');
        $this->emit('verPostulanteModal', $id_applicant);
    }

    public function mount(){
        if(!isset($_GET["c"])){
            return redirect()->to("/admin");
        }
        $this->id_client = $_GET["c"];
        if(!isset($_GET["r"])){
            return redirect()->to('/requerimientos?c='.$this->id_client);
        }
        $this->id_request = $_GET["r"];
        $this->get_applicants();
    }

    public function render()
    {
        return view('livewire.administrador.postulantes');
    }
}
