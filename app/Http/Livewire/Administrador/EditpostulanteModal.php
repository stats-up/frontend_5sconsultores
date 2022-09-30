<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Livewire\WithFileUploads;

class EditpostulanteModal extends Component
{

    use WithFileUploads;

    public $id_client;
    public $id_request;
    public $id_applicant;
    public $areas = [];
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
    public $old_image;
    public $old_pdf;

    protected $rules = [
        'full_name' => 'required|min:2',
        'dni' => 'required|min:7',
        'city' => 'required|min:3',
        'commune' => 'required|min:3',
        'address' => 'required|min:5',
        'description' => 'max:600'
    ];

    protected $listeners = ['editPostulanteModal'];

    private function get_applicant($id_applicant){
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $id_applicant;
        $endpint = getenv("API_URL")."/api/get_applicant";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpint);
        $this->full_name =  $response->json()[0]["nombre_completo"];
        $this->dni =  $response->json()[0]["rut"];
        $this->city =  $response->json()[0]["ciudad"];
        $this->commune =  $response->json()[0]["comuna"];
        $this->address =  $response->json()[0]["direccion"];
        $this->applicant_area =  $response->json()[0]["id_area_postulante"];
        $this->description =  $response->json()[0]["descripcion"];
        $this->old_image =  $response->json()[0]["image_base_64"];
        $this->old_pdf =  $response->json()[0]["pdf_base_64"];
        $this->youtube_url =  $response->json()[0]["youtube_url"];
    }

    public function submit(){
        $this->validate();
        $this->dispatchBrowserEvent('swalLoading');
        $profile_image = $this->old_image;
        if(isset($this->image)){
            $path = $this->image->getRealPath();
            $mime = $this->image->getMimeType();
            $profile_image = "data:$mime;base64,".base64_encode(file_get_contents($path));
        }
        $profile_pdf = $this->old_pdf;
        if(isset($this->pdf)){
            $path = $this->pdf->getRealPath();
            $profile_pdf = base64_encode(file_get_contents($path));
        }
        $token = getenv("API_TOKEN");
        $array["token"] = $token;
        $array["data"]["id"] = $this->id_applicant;
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
        $endpoint = getenv("API_URL")."/api/upd_applicant";
        $response = Http::withBody(json_encode($array), 'application/json')->post($endpoint);
        return redirect()->to("/postulantes?c=$this->id_client&r=$this->id_request");
    }

    public function editPostulanteModal($id_applicant){
        $this->id_applicant = $id_applicant;
        $this->get_applicant($id_applicant);
        $this->dispatchBrowserEvent('swalClose');
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
        return view('livewire.administrador.editpostulante-modal');
    }
}
