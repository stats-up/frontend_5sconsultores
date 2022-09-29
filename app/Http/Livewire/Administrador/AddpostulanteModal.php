<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Livewire\WithFileUploads;

class AddpostulanteModal extends Component
{

    use WithFileUploads;

    public $areas = [];
    public $id_client;
    public $id_request;
    //Form
    public $full_name;
    public $dni;
    public $gender = "Femenino";
    public $city;
    public $commune;
    public $address;
    public $applicant_area = 1;
    public $description;
    public $image;
    public $pdf;
    public $youtube_url;

    protected $rules = [
        'full_name' => 'required|min:2',
        'dni' => 'required|min:7',
        'city' => 'required|min:3',
        'commune' => 'required|min:3',
        'address' => 'required|min:5',
        'description' => 'max:600'
    ];

    public function submit(){
        $this->validate();
        $this->dispatchBrowserEvent('swalLoading');
        $profile_image = "";
        if(isset($this->image)){
            $path = $this->image->getRealPath();
            $mime = $this->image->getMimeType();
            $profile_image = "data:$mime;base64,".base64_encode(file_get_contents($path));
        }
        $profile_pdf = "";
        if(isset($this->pdf)){
            $path = $this->pdf->getRealPath();
            $profile_pdf = base64_encode(file_get_contents($path));
        }
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id_request"] = $this->id_request;
        $array["data"]["full_name"] = $this->full_name;
        $array["data"]["dni"] = $this->dni;
        $array["data"]["gender"] = $this->gender;
        $array["data"]["city"] = $this->city;
        $array["data"]["commune"] = $this->commune;
        $array["data"]["address"] = $this->address;
        $array["data"]["applicant_area"] = $this->applicant_area;
        $array["data"]["description"] = $this->description;
        $array["data"]["image"] = $profile_image;
        $array["data"]["pdf"] = $profile_pdf;
        $array["data"]["youtube_url"] = $this->youtube_url;
        $endpoint = getenv("API_URL")."/api/add_applicant";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        return redirect()->to("/postulantes?c=$this->id_client&r=$this->id_request");
    }

    public function mount($id_client,$id_request){
        $this->id_client = $id_client;
        $this->id_request = $id_request;
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $endpint = getenv("API_URL")."/api/get_applicant_areas";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->areas = $response->json();
    }

    public function render()
    {
        return view('livewire.administrador.addpostulante-modal');
    }
}
