<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;

class ModalEditcliente extends Component
{   

    public $estado;

    public function render()
    {
        return view('livewire.administrador.modal-editcliente');
    }
}
