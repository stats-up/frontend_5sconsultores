<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class EditcontactoModal extends Component
{
    public $id_cliente;
    public $id_account;
    public $name;
    public $email;
    public $phone;
    public $id_area;
    public $status;
    //
    public $areas = [];

    protected $listeners = ['editContactoModal'];

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|min:5'
    ];

    public function editContactoModal($id_account){
        $this->id_account = $id_account;
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $id_account;
        $endpint = getenv("API_URL")."/api/get_account";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->name =  $response->json()[0]["full_name"];
        $this->email =  $response->json()[0]["email"];
        $this->phone =  $response->json()[0]["cellphone"];
        $this->id_area =  $response->json()[0]["customer_area"];
        $this->status =  $response->json()[0]["status"] == "activa" ? true : false;
        $this->dispatchBrowserEvent('swalClose');
    }
    public function submit(){
        $this->validate();
        $this->dispatchBrowserEvent('swalLoading');
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $this->id_account;
        $array["data"]["id_area"] = $this->id_area;
        $array["data"]["email"] = $this->email;
        $array["data"]["full_name"] = $this->name;
        $array["data"]["cellphone"] = $this->phone;
        $array["data"]["status"] = $this->status ? "activa" : "inactiva";
        $endpoint = getenv("API_URL")."/api/upd_account";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        $endpoint = getenv("API_URL")."/api/upd_account_status";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);

        return redirect()->to("/contactos?c=".$this->id_cliente);
    }
    public function mount($id_cliente){
        $this->id_cliente = $id_cliente;
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id_customer"] = $id_cliente;
        $endpint = getenv("API_URL")."/api/get_customer_areas";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->areas = $response->json();
    }

    public function render()
    {
        return view('livewire.administrador.editcontacto-modal');
    }
}
