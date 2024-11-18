<?php

namespace App\Livewire\Admin;

use App\Mail\SeguimientoDenunciaEmail;
use App\Models\AnexoDenuncia;
use Illuminate\Http\Request;
use Mail;
use Livewire\Component;
use Twilio\Rest\Client;

class ShowFormDenuncia extends Component
{

    public $show_modal_validate_form;
    public $show_modal_seguimiento_denuncia;

    public $formulario_denuncia_model;
    public $formulario_denuncia;
    public $denunciante;
    public $denuncia;
    public $relacion_hecho_denuncia;
    
    public $docs;

    //EMAIL
    public $title = '';
    public $description = '';
    public $is_valid_form;

    protected $rules = [
        'title' => 'required|string',
        'description' => 'required',
    ];

    protected $messages = [
        'title.required' => 'El título del mensaje es requerido.',
        'title.string' => 'El título del mensaje debe contener caracteres válidos.',

        'description.required' => 'La descripción del mensaje es requerido.',
    ];


    public function mount($formulario)
    {
        $formulario = $formulario->load(['denunciante', 'denuncia', 'denuncia.personasDenunciadas', 'relacionHechoDenuncia']);

        $this->formulario_denuncia_model = $formulario;

        $this->formulario_denuncia = $formulario->toArray();
        $this->denunciante = $formulario->denunciante?->toArray();
        $this->denuncia = $formulario->denuncia->toArray();

        $this->relacion_hecho_denuncia = $formulario->relacionHechoDenuncia;
        $this->relacion_hecho_denuncia->hora_hecho = substr($this->relacion_hecho_denuncia->hora_hecho, 0, 5);
        $this->relacion_hecho_denuncia->hora_denuncia = substr($this->relacion_hecho_denuncia->hora_denuncia, 0, 5);

        $this->relacion_hecho_denuncia = $formulario->relacionHechoDenuncia->toArray();

        $this->docs = $formulario->anexosDenuncias->toArray();
        // $this->docs = AnexoDenuncia::all();
    }

    public function openModalValidatingForm($value)
    {
        $this->reset('title', 'description', 'show_modal_validate_form');
        $this->is_valid_form = $value;
        $this->show_modal_validate_form = true;
    }

    public function openModalSeguimientoDenuncia()
    {
        $this->reset('title', 'description', 'show_modal_seguimiento_denuncia');
        $this->show_modal_seguimiento_denuncia = true;
    }

    public function removeDoc($docPath)
    {
        // Delete the file from the 'public' disk (public/storage/docs)
        if (\Storage::disk('public')->exists($docPath)) {
            \Storage::disk('public')->delete($docPath);
        }

        // Remove the document from the docs array
        $this->docs = array_filter($this->docs, fn($doc) => $doc['path'] !== $docPath);
    }

    public function sendEmail()
    {

        $details = [
            'id' => $this->formulario_denuncia_model->id,
            'title' => $this->title,
            'body' => $this->description
        ];
        // dd($this->denunciante['correo_electronico']);


        Mail::to($this->denunciante['correo_electronico'])->send(new SeguimientoDenunciaEmail($details));
    }

    // public function confirmValidation($value)
    // {

    //     $this->formulario_denuncia_model->es_valido = $value;
    //     $this->formulario_denuncia_model->save();

    //     if ($value == 2) {
    //         session()->flash('swal', [
    //             'icon' => 'success',
    //             'title' => '¡Bien Hecho!',
    //             'text' => 'Formulario de Denuncia #' . $this->formulario_denuncia_model->id . ' aceptado correctamente.'
    //         ]);
    //     } else if ($value == 3) {
    //         session()->flash('swal', [
    //             'icon' => 'error',
    //             'title' => '¡Ups!',
    //             'text' => 'Formulario de Denuncia #' . $this->formulario_denuncia_model->id . ' rechazado.'
    //         ]);
    //     } else if ($value == 5) {
    //         session()->flash('swal', [
    //             'icon' => 'success',
    //             'title' => '¡Bien Hecho!',
    //             'text' => 'Formulario de Denuncia #' . $this->formulario_denuncia_model->id . ' ha sido finalizado correctamente.'
    //         ]);
    //     }
    //     if ($this->is_valid_form != null && $value != 5) {
    //         $this->validate();
    //         $this->sendEmail();
    //     }
    //     $this->reset('is_valid_form');
    //     return redirect()->route('show-denuncias');
    // }

    public function sendCommentSeguimiento()
    {
        $this->validate();

        $this->show_modal_seguimiento_denuncia = false;
        if ($this->formulario_denuncia_model != null && $this->title != null && $this->description != null) {
            $this->sendEmail();
        }

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Bien Hecho!',
            'text' => 'Nuevo mensaje al denunciante: ' . $this->formulario_denuncia_model->denunciante->nombre . ' enviado correctamente.'
        ]);
        $this->reset('title', 'description');

        return redirect()->route('show-denuncias');
    }

    // public function sendMessage()
    // {
    //     $formattedNumber = 'whatsapp:'.$this->whatsapp_number;

    //     try {
    //         $twilioSid = config('services.twilio.sid');
    //         $twilioToken = config('services.twilio.token');
    //         $twilioFrom = config('services.twilio.whatsapp_from');


    //         $twilio = new Client($twilioSid, $twilioToken);

    //         $twilio->messages->create($formattedNumber, [
    //             'from' => $twilioFrom,
    //             'body' => $this->message,
    //         ]);

    //         session()->flash('success', 'WhatsApp message sent successfully!');
    //     } catch (\Exception $e) {
    //         session()->flash('error', 'Failed to send WhatsApp message: ' . $e->getMessage());
    //     }
    // }

    public function render()
    {
        return view('livewire.admin.show-form-denuncia');
    }
}
