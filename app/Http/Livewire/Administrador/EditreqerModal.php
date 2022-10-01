<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class EditreqerModal extends Component
{   
    public $id_requerimiento;
    public $name;
    public $id_area;
    public $description;
    public $id_contacto;
    public $requester_account;
    public $email_contacto;
    public $estado;

    public $customer_areas = [];
    public $accounts = [];

    protected $listeners = ['editRequerimientoModal'];

    protected $rules = [
        'name' => 'required|min:3',
        'requester_account' => 'required|min:1'
    ];

    public function editRequerimientoModal($id_requer){
        $this->id_requerimiento = $id_requer;
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $id_requer;
        $endpoint = getenv("API_URL")."/api/get_request";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        $this->name = $response->json()[0]["nombre"];
        $this->description = $response->json()[0]["descripcion"];
        $this->requester_account = $response->json()[0]["nombre_completo_cuenta_solicitante"];
        $this->id_contacto = $response->json()[0]["id_cuenta_solicitante"];
        $this->email_contacto = $response->json()[0]["email_cuenta_solicitante"];
        $this->estado = $response->json()[0]["estado_requerimiento"] == "activo" ? true : false;;
        $this->dispatchBrowserEvent('swalClose');  
    }

    public function save(){
        $this->validate();
        $this->dispatchBrowserEvent('swalLoading');
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $this->id_requerimiento;
        $array["data"]["name"] = $this->name;
        $array["data"]["description"] = $this->description;
        $array["data"]["status"] = $this->estado ? "activo" : "inactivo";
        $endpoint = getenv("API_URL")."/api/upd_request";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        $endpoint = getenv("API_URL")."/api/upd_request_status";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        return redirect()->to("/requerimientos?c=".$this->id_customer);
    }

    public function mount($id_cliente){
        $this->id_customer = $id_cliente;       
    }

    public function render()
    {
        return view('livewire.administrador.editreqer-modal');
    }
}
