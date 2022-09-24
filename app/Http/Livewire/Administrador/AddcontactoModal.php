<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;


class AddcontactoModal extends Component
{
    public $id_customer;
    public $id_area;
    public $nombre_area;

    public $name;
    public $email;
    public $phone;

    protected $listeners = ['addContactoModal'];

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|min:5'
    ];

    public function addContactoModal($id_cliente,$id_area){
        $this->id_cliente = $id_cliente;
        $this->id_area = $id_area;
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $id_area;
        $endpint = getenv("API_URL")."/api/get_customer_area";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->nombre_area =  $response->json()[0]["name"];
        $this->id_area =  $response->json()[0]["id"];
        $this->id_customer =  $response->json()[0]["customer"];
        $this->dispatchBrowserEvent('swalClose');
    }

    public function submit(){
        $this->dispatchBrowserEvent('swalLoading');
        $this->validate();
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["customer_id"] = $this->id_customer;
        $array["data"]["customer_area"] = $this->id_area;
        $array["data"]["email"] = $this->email;
        $array["data"]["full_name"] = $this->name;
        $array["data"]["cellphone"] = $this->phone;
        $endpoint = getenv("API_URL")."/api/add_account";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        return redirect()->to("/contactos?c=".$this->id_customer);
    }

    public function render()
    {
        return view('livewire.administrador.addcontacto-modal');
    }
}
