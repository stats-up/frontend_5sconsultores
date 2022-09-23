<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;

class MenuCliente extends Component
{

    public $id_cliente;

    public function mount($id_cliente){
        $this->id_cliente = $id_cliente;
    }
    public function render()
    {
        return view('livewire.administrador.menu-cliente');
    }
}
