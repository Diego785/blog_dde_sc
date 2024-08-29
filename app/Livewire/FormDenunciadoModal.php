<?php

namespace App\Livewire;

use Livewire\Component;

class FormDenunciadoModal extends Component
{


    //DENUNCIADOS
    public $nombre;
    public $cargo;
    public $personas_denunciadas;
    public $persona_denunciada;

    
    public function render()
    {
        return view('livewire.form-denunciado-modal');
    }
}
