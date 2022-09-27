<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class RequerModal extends Component
{
    public $id_customer;
    public $accounts = [];
    public $customer_areas = [];
    //Request
    public $name;
    public $requester_account;
    public $description = "";

    protected $rules = [
        'name' => 'required|min:3',
        'requester_account' => 'required|min:1'
    ];

    private function get_customer_areas($id_customer){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id_customer"] = $id_customer;
        $endpint = getenv("API_URL")."/api/get_customer_areas";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->customer_areas = $response->json();
    }

    public function get_accounts_by_customer_area($id_area){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["customer_area_id"] = $id_area;
        $endpint = getenv("API_URL")."/api/get_all_accounts_by_customer_area";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->accounts = $response->json();
    }

    public function submit(){
        $this->validate();
        $this->dispatchBrowserEvent('swalLoading');
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["name"] = $this->name;
        $array["data"]["requester_account"] = $this->requester_account;
        $array["data"]["description"] = $this->description == null ? "Sin Descripción" : $this->description;
        $endpoint = getenv("API_URL")."/api/add_request";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        return redirect()->to("/requerimientos?c=".$this->id_customer);
    }

    public function mount($id_cliente){
        $this->id_customer = $id_cliente;
        $this->get_customer_areas($id_cliente);
    }

    public function render()
    {
        return view('livewire.administrador.requer-modal');
    }
}
