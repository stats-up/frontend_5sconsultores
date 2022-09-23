<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;

class Requerimientos extends Component
{
    public $id_cliente;

    public function mount(){
        if(!isset($_GET["c"])){
            return redirect()->to("/admin");
        }
        $this->id_cliente = $_GET["c"];
    }

    public function render()
    {
        return view('livewire.administrador.requerimientos');
    }
}
