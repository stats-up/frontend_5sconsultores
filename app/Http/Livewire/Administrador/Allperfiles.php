<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class Allperfiles extends Component
{

    public $applicants = [];

    public function mount(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $endpoint = getenv("API_URL")."/api/get_applicants";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        $this->applicants = $response->json();
    }

    public function render()
    {
        return view('livewire.administrador.allperfiles');
    }
}
