<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class ModalEditcliente extends Component
{   

    public $estado;

    public function render()
    {
        return view('livewire.administrador.modal-editcliente');
    }
}
