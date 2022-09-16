<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Livewire\WithFileUploads;

class ModalCliente extends Component
{   
    use WithFileUploads;

    public $nombre;
    public $logo;

    protected $rules = [
        'nombre' => 'required|min:2'
    ];

    public function submit(){
        $this->validate();
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $base64 = null;
        if(isset($this->logo)){
            $path = $this->logo->getRealPath();
            $mime = $this->logo->getMimeType();
            $base64 = "data:$mime;base64,".base64_encode(file_get_contents($path));
        }
        $array["data"]["name"] = $this->nombre;
        $array["data"]["logo"] = $base64;
        $endpoint = getenv("API_URL")."/api/add_customer";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        return redirect()->to("/admin");
    }

    public function render()
    {
        return view('livewire.administrador.modal-cliente');
    }
}
