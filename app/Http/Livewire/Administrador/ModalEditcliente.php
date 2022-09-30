<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Livewire\WithFileUploads;

class ModalEditcliente extends Component
{   
    use WithFileUploads;

    public $id_cliente;
    public $cliente_actual = [];
    public $old_logo = "";
    //to edit
    public $nombre;
    public $logo;
    public $estado;

    protected $listeners = ['modalEditCliente'];

    public function modalEditCliente($id_cliente){
        $this->id_cliente = $id_cliente;
        $this->logo = null;
        $this->getClientData();
    }
    public function updatedLogo(){
        $this->dispatchBrowserEvent('swalClose');
    }
    private function getClientData(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $this->id_cliente;
        $endpint = getenv("API_URL")."/api/get_customer";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->cliente_actual = $response->json()[0];
        $this->nombre = $this->cliente_actual["name"];
        $this->old_logo = $this->cliente_actual["logo_base64"];
        $this->estado = $this->cliente_actual["status"] == "activo" ? true : false;
        $this->dispatchBrowserEvent('swalClose');
    }

    public function editarCliente(){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $this->id_cliente;
        $array["data"]["name"] = $this->nombre;
        $array["data"]["status"] = $this->estado ? "activo" : "inactivo";
        $base64 = null;
        if(isset($this->logo)){
            $path = $this->logo->getRealPath();
            $mime = $this->logo->getMimeType();
            $base64 = "data:$mime;base64,".base64_encode(file_get_contents($path));
        }else{
            $base64 = $this->old_logo;
        }
        $array["data"]["logo"] = $base64;
        $endpoint = getenv("API_URL")."/api/upd_customer";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        $endpoint = getenv("API_URL")."/api/upd_customer_status";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        return redirect()->to("/admin");
    }

    public function mount(){

    }
    public function render()
    {
        return view('livewire.administrador.modal-editcliente');
    }
}
