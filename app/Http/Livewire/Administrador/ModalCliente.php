<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;

class ModalCliente extends Component
{   
    public $nombre;
    public $logo;

    public function nuevoCliente(){
        dd($this->nombre);
    }

    public function render()
    {
        return view('livewire.administrador.modal-cliente');
    }
}
