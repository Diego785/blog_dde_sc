<?php

namespace App\Livewire\Admin;

use App\Mail\SeguimientoDenunciaEmail;
use Illuminate\Http\Request;
use Mail;
use Livewire\Component;

class ShowFormDenuncia extends Component
{

    public $show_modal_seguimiento_denuncia;

    public $formulario_denuncia_model;
    public $formulario_denuncia;
    public $denunciante;
    public $denuncia;
    public $relacion_hecho_denuncia;

    //EMAIL
    public $title = '';
    public $description = '';
    public $is_valid_form;

    public function mount($formulario)
    {
        // Eager load relationships
        $formulario = $formulario->load(['denunciante', 'denuncia', 'denuncia.personasDenunciadas', 'relacionHechoDenuncia']);

        $this->formulario_denuncia_model = $formulario;

        $this->formulario_denuncia = $formulario->toArray();
        $this->denunciante = $formulario->denunciante?->toArray();
        $this->denuncia = $formulario->denuncia->toArray();

        $this->relacion_hecho_denuncia = $formulario->relacionHechoDenuncia;
        $this->relacion_hecho_denuncia->hora_hecho = substr($this->relacion_hecho_denuncia->hora_hecho, 0, 5);
        $this->relacion_hecho_denuncia->hora_denuncia = substr($this->relacion_hecho_denuncia->hora_denuncia, 0, 5);

        $this->relacion_hecho_denuncia = $formulario->relacionHechoDenuncia->toArray();
    }

    public function openModalSeguimientoDenuncia($value)
    {
        $this->is_valid_form = $value;
        $this->show_modal_seguimiento_denuncia = true;
    }

    public function sendEmail()
    {
        $details = [
            'id' => $this->formulario_denuncia_model->id,
            'title' => $this->title,
            'body' => $this->description
        ];

        Mail::to($this->denunciante['correo_electronico'])->send(new SeguimientoDenunciaEmail($details));
    }

    public function confirmValidation($value)
    {
        $this->formulario_denuncia_model->es_valido = $value;
        $this->formulario_denuncia_model->save();
        if ($value == 2) {
            session()->flash('swal', [
                'icon' => 'success',
                'title' => '¡Bien Hecho!',
                'text' => 'Formulario de Denuncia #' . $this->formulario_denuncia_model->id . ' aceptado correctamente.'
            ]);
        } else if ($value == 3) {
            session()->flash('swal', [
                'icon' => 'error',
                'title' => '¡Ups!',
                'text' => 'Formulario de Denuncia #' . $this->formulario_denuncia_model->id . ' rechazado.'
            ]);
        }
        $this->sendEmail();
        return redirect()->route('show-denuncias');
    }
    public function render()
    {
        return view('livewire.admin.show-form-denuncia');
    }
}
