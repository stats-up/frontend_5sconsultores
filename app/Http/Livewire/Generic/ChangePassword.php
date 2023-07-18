<?php

namespace App\Http\Livewire\Generic;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailStructure;

class ChangePassword extends Component
{
    public $new_password;
    public $new_password_confirmation;

    public function submitChangePassword()
    {
        $this->dispatchBrowserEvent('swalLoading');
        $id = Session::get('user')["id"];
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $id;
        //GET EMAIL
        $endpoint = getenv("API_URL")."/api/get_account";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        $array["data"]["email"] = $response->json()[0]["email"];
        //END
        //GENERATE RESET PASSWORD
        $random_string = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,32);
        $array["data"]["hash"] = $random_string;
        $endpoint = getenv("API_URL")."/api/add_reset_password";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        //END
        $array["data"]["password"] = $this->new_password;
        $endpoint = getenv("API_URL")."/api/upd_account_password";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        if($response->status() == "200"){
            $this->new_password = "";
            $this->new_password_confirmation = "";
            $this->dispatchBrowserEvent('swalSuccess', "Contraseña actualizada correctamente");
            $passwd_pad = str_pad(substr($array["data"]["password"],-2), strlen($array["data"]["password"]), '*', STR_PAD_LEFT);
            $message = view('mail.global')->with('title', "Actualización de contraseña")->with('name', Session::get('user')["nombre_completo"])->with('password',$passwd_pad);
            Mail::to(Session::get('user')["email"])->send(new MailStructure("Ha actualizado su contraseña - 5SConsultores",$message));
            $this->dispatchBrowserEvent('correoActivacionEnviado');
        }else{
            $this->dispatchBrowserEvent('swalError', "Error al actualizar la contraseña");
        }
    }

    public function render()
    {
        return view('livewire.generic.change-password');
    }
}
