<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class Cliente extends Component
{   
    public $requerimientos = [];

    public function get_all_requerimientos(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id_user"] = Session::get('user')["id"];
        $endpoint = getenv("API_URL")."/api/get_requests_by_id_user";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        $this->requerimientos = $response->json();
    }

    public function mount(){
        $this->get_all_requerimientos();
    }

    public function render()
    {
        return view('livewire.cliente');
    }
}
