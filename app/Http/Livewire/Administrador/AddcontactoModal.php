<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailStructure;


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
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $id_area;
        $endpint = getenv("API_URL")."/api/get_customer_area";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        if($response->json() != null){
            $this->nombre_area =  $response->json()[0]["name"];
            $this->id_area =  $response->json()[0]["id"];
            $this->id_customer =  $response->json()[0]["customer"];
        }else{
            $this->nombre_area =  "Administración";
            $this->id_area = null;
            $this->id_customer = null;
        }
        $this->dispatchBrowserEvent('swalClose');
    }

    public function submit(){
        $this->dispatchBrowserEvent('swalLoading');
        $this->validate();
        $users = $this->getUserByEmail(strtolower($this->email));
        $se_agrega = true;
        if(count($users) > 0){
            foreach ($users as $user) {
                if($user["estado_empresa"] != "eliminado" && $user["estado_cuenta"] != "eliminada"){
                    $se_agrega = false;
                    $this->dispatchBrowserEvent('emailExist', $user);
                }
            }
        }
        if($se_agrega){
            $token = getenv("API_TOKEN");
            $array["token"] = $token;
            $array["data"]["customer_id"] = $this->id_customer;
            $array["data"]["customer_area"] = $this->id_area;
            $array["data"]["email"] = strtolower($this->email);
            $array["data"]["full_name"] = $this->name;
            $array["data"]["cellphone"] = $this->phone;
            //CREATE USER
            $endpoint = getenv("API_URL")."/api/add_account";
            $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
            $endpoint = getenv("API_URL")."/api/get_account";
            $random_string = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,32);
            //GENERATE HASH
            $array = null;
            $token = getenv("API_TOKEN");
            $array["token"] = $token;
            $array["data"]["email"] = strtolower($this->email);
            $array["data"]["hash"] = $random_string;
            $endpoint = getenv("API_URL")."/api/add_reset_password";
            $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
            //MESSAGE
            $message = view('mail.new_user')->with('title', "Nueva Cuenta")->with('name', $this->name)->with('url', "www.candidatas.5sconsultores.cl/resetpassword?email=".strtolower($this->email)."&key=".$random_string)->render();
            Mail::to($this->email)->queue(new MailStructure("Nueva Cuenta - 5SConsultores",$message));
            if($this->id_customer == null){
                return redirect()->to("/users");
            }
            return redirect()->to("/contactos?c=".$this->id_customer);
        }
    }

    private function getUserByEmail($email){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["email"] = $email;
        $endpoint = getenv("API_URL")."/api/get_account_by_email";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        return $response->json();
    }

    public function render()
    {
        return view('livewire.administrador.addcontacto-modal');
    }
}
