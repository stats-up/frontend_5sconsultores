<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class AddpostulanteModal extends Component
{
    public $areas = [];

    public function mount(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $endpint = getenv("API_URL")."/api/get_applicant_areas";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->areas = $response->json();
    }

    public function render()
    {
        return view('livewire.administrador.addpostulante-modal');
    }
}
