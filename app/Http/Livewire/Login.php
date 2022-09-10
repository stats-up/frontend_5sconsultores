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
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["email"] = strtolower($this->email);
        $array["data"]["password"] = $this->passwd;
        $endpint = getenv("API_URL")."/api/auth_user";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        if($response->json() != null){
            session::put(['user' => $response->json()[0]]);
            $user_type = $response->json()[0]["tipo_cuenta"];
            return redirect()->to("/$user_type");
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
