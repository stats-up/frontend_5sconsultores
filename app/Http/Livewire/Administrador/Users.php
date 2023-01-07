<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailStructure;

class Users extends Component
{
    public $administradores = [];

    public function seleccionarNuevoContacto(){
        $this->dispatchBrowserEvent('swalLoading');
        $this->emit('addContactoModal', null, null);
    }
    public function seleccionarEditarContacto($id_contacto){
        $this->dispatchBrowserEvent('swalLoading');
        $this->emit('editContactoModal', $id_contacto);
    }
    public function reenviarActivacionCorreo($email,$name){
        //RANDOM STRING
        $random_string = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,32);
        //GENERAR NUEVO HASH
        $array = null;
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["email"] = strtolower($email);
        $array["data"]["hash"] = $random_string;
        $endpoint = getenv("API_URL")."/api/add_reset_password";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        //ENVIAR CORREO
        $message = view('mail.new_user')->with('title', "Nueva Cuenta")->with('name', $name)->with('url', getenv("APP_URL")."/resetpassword?email=".strtolower($email)."&key=".$random_string)->render();
        Mail::to($email)->queue(new MailStructure("Nueva Cuenta - 5SConsultores",$message));
        $this->dispatchBrowserEvent('correoActivacionEnviado');
    }
    public function mount(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $endpint = getenv("API_URL")."/api/get_admin_accounts";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->administradores = $response->json();
    }
    public function render()
    {
        return view('livewire.administrador.users');
    }
}
