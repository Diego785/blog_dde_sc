<?php

namespace App\Livewire;

use App\Models\PersonaDenunciada;
use Livewire\Component;

class FormDenunciados extends Component
{
    public $formulario_denuncia;
    public $show_modal_denunciado = false;

    //DENUNCIADOS
    public $nombre;
    public $cargo;
    public $personas_denunciadas;
    public $persona_denunciada;

    protected $rules = [
        'nombre' => 'required|string',
        'cargo' => 'required|string',
    ];
    protected $messages = [
        'nombre.required' => 'El campo nombre es requerido.',
        'nombre.string' => 'El campo nombre es debe ser de tipo string.',
        'cargo.required' => 'El campo cargo es requerido.',
        'cargo.string' => 'El campo string es debe ser de tipo string.',
    ];

    public function mount($formulario)
    {
        $this->formulario_denuncia = $formulario;
        $this->personas_denunciadas = $formulario->denuncia->personasDenunciadas;
    }



    public function openModalAddDenunciado()
    {
        $this->reset('show_modal_denunciado', 'nombre', 'cargo');
        $this->resetValidation();
        $this->show_modal_denunciado = true;
    }

    public function openModalEditDenunciado($id)
    {
        $this->resetValidation();
        $this->persona_denunciada = PersonaDenunciada::find($id);
        $this->nombre = $this->persona_denunciada->nombre;
        $this->cargo = $this->persona_denunciada->cargo;
        $this->show_modal_denunciado = true;
    }

    public function addDenunciado()
    {
        $this->validate();
        if ($this->persona_denunciada == null) {
            PersonaDenunciada::create([
                'nombre' => $this->nombre,
                'cargo' => $this->cargo,
                'denuncia_id' => $this->formulario_denuncia->denuncia->id,
            ]);
            $this->reset('show_modal_denunciado', 'nombre', 'cargo');

            $this->personas_denunciadas = PersonaDenunciada::all();

            session()->flash('swal', [
                'icon' => 'success',
                'title' => '¡Bien Hecho!',
                'text' => 'Denunciado agregado correctamente.',
            ]);
        } else {
            $this->persona_denunciada->nombre = $this->nombre;
            $this->persona_denunciada->cargo = $this->cargo;
            $this->persona_denunciada->update();
            $this->personas_denunciadas = PersonaDenunciada::all();

            $this->reset('show_modal_denunciado', 'nombre', 'cargo', 'persona_denunciada');
        }
    }

    public function deleteDenunciado($id)
    {
        $this->persona_denunciada = PersonaDenunciada::find($id);
        $this->persona_denunciada->delete();
        $this->personas_denunciadas = PersonaDenunciada::all();
        $this->reset('persona_denunciada', 'nombre', 'cargo');

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Bien Hecho!',
            'text' => 'Denunciado eliminado correctamente.',
        ]);
    }



    public function render()
    {
        return view('livewire.form-denunciados');
    }
}
