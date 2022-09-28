<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class VerpostulanteModal extends Component
{

    public $applicant = [];

    protected $listeners = ['verPostulanteModal'];

    public function verPostulanteModal($id_applicant){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $id_applicant;
        $endpoint = getenv("API_URL")."/api/get_applicant";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        $this->applicant = $response->json()[0];
        $this->dispatchBrowserEvent('swalClose');
    }

    public function render()
    {
        return view('livewire.administrador.verpostulante-modal');
    }
}
