<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailStructure;

class VercontactoModal extends Component
{

    public $name;
    public $email;
    public $phone;
    public $status;
    public $password_status;

    protected $listeners = ['verContactoModal'];

    public function verContactoModal($id_account){
        $this->id_account = $id_account;
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $id_account;
        $endpint = getenv("API_URL")."/api/get_account";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->name =  $response->json()[0]["nombre_completo"];
        $this->email =  $response->json()[0]["email"];
        $this->phone =  $response->json()[0]["telefono"];
        $this->status =  $response->json()[0]["estado_cuenta"];
        $this->password_status =  $response->json()[0]["estado_cuenta_clave"];
        $this->dispatchBrowserEvent('swalClose');
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

    public function render()
    {
        return view('livewire.administrador.vercontacto-modal');
    }
}
