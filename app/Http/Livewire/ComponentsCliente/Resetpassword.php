<?php

namespace App\Http\Livewire\ComponentsCliente;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class Resetpassword extends Component
{
    public $validado = false;
    public $password;
    public $password_confirmation;
    public $email;
    public $token;

    protected $rules = [
        'password' => 'required|min:4',
        'password_confirmation' => 'required|min:4'
    ];

    private function validacion(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["email"] = $this->email;
        $endpoint = getenv("API_URL")."/api/get_reset_password";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        if(count($response->json()) > 0){
            $item = $response->json()[0];
            if($item["hash"] == $this->token){
                return true;
            }else{ 
                return false;
            }
        }else{
            return false;
        }
    }
    public function submit(){
        $this->validate();
        if($this->password == $this->password_confirmation){
            $token = getenv("API_TOKEN");
            $array["token"] = $token;
            $array["data"]["email"] = $this->email;
            $array["data"]["password"] = $this->password;
            $endpoint = getenv("API_URL")."/api/upd_account_password";
            $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
            if($response->status() == "200"){
                $this->dispatchBrowserEvent('swalSuccess', "Contraseña actualizada correctamente");
            }else{
                $this->dispatchBrowserEvent('swalError', "Error al actualizar la contraseña");
            }
        }else{
            $this->dispatchBrowserEvent('swalError', "Las contraseñas no coinciden");
        }
    }
    public function mount(Request $request){
        $gets = $request->input();
        if(isset($gets["email"]) && isset($gets["key"])){
            $this->email = $gets["email"];
            $this->token = $gets["key"];
            $this->validado = $this->validacion();
        }
    }
    public function render()
    {
        return view('livewire.components-cliente.resetpassword');
    }
}
