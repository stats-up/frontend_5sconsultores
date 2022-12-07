<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;


class Login extends Component
{
    public $email;
    public $passwd;

    protected $listeners = ['validarSession','autenticar'];

    public function validarSession(){
        if(Session::has('user')){
            $user_type = Session::get('user')["tipo_cuenta"];
            return redirect()->to("/$user_type");
        }else{
            $this->dispatchBrowserEvent('close_swal');
        }
    }
    public function autenticar(){
        if($this->email == "" || $this->passwd == ""){
            $this->dispatchBrowserEvent('incomplete');
            return null;
        }
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["email"] = strtolower($this->email);
        $array["data"]["password"] = $this->passwd;
        $endpint = getenv("API_URL")."/api/auth_user";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        if($response->json() != null){
            $user = $response->json()[0];

            $estado_empresa = false;
            if($user["estado_empresa"] == null || $user["estado_empresa"] == "activo"){
                $estado_empresa = true;
            }
            if($user["estado_cuenta"] == "activa" &&  $estado_empresa){
                session::put(['user' => $user]);
                $user_type = $user["tipo_cuenta"];
                return redirect()->to("/$user_type");
            }else{
                $this->dispatchBrowserEvent('disabled');
            }
            
        }else{
            $this->dispatchBrowserEvent('incorrect');
        }
    }
    public function mount(){

    }
    public function render()
    {
        return view('livewire.login');
    }
}
