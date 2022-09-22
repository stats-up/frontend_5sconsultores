<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class Contactos extends Component
{
    public $customer_areas = [];

    private function get_customer_areas($id_customer){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id_customer"] = $id_customer;
        $endpint = getenv("API_URL")."/api/get_customer_areas";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->customer_areas = $response->json();
        $this->get_accounts_by_customer_areas();
    }

    private function get_accounts_by_customer_areas(){
        $ca = $this->customer_areas;
        $index = 0;
        foreach ($ca as $row) {
            $token = getenv("API_TOKEN");
            $array["token"] = $token;
            $array["data"]["customer_area_id"] = $row["id"];
            $endpint = getenv("API_URL")."/api/get_all_accounts_by_customer_area";
            $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
            $ca[$index]["accounts"] = $response->json();
            $index++;
        }

        $this->customer_areas = $ca;
    }

    public function mount(){
        if(!isset($_GET["c"])){
            return redirect()->to("/admin");
        }
        $id_customer = $_GET["c"];
        $this->get_customer_areas($id_customer);
    }

    public function render()
    {
        return view('livewire.administrador.contactos');
    }
}
