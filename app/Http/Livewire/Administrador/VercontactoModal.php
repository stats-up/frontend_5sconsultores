<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class VercontactoModal extends Component
{

    public $name;
    public $email;
    public $phone;
    public $status;

    protected $listeners = ['verContactoModal'];

    public function verContactoModal($id_account){
        $this->id_account = $id_account;
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $id_account;
        $endpint = getenv("API_URL")."/api/get_account";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->name =  $response->json()[0]["full_name"];
        $this->email =  $response->json()[0]["email"];
        $this->phone =  $response->json()[0]["cellphone"];
        $this->status =  $response->json()[0]["status"];
        $this->dispatchBrowserEvent('swalClose');
    }

    public function render()
    {
        return view('livewire.administrador.vercontacto-modal');
    }
}
