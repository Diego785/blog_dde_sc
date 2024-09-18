<?php

namespace App\Livewire\Admin;

use App\Models\Portada;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShowPortada extends Component
{

    use WithFileUploads;

    public $show_modal_add_portada = true;

    public $portada;

    public $imagen, $titulo, $fecha_inicio, $fecha_fin, $esta_activo, $imagen_path;

    public $temporary_url;
    protected $rules = [
        'imagen' => 'required|image|max:1024',
        'titulo' => 'required|string|max:255',
        'fecha_inicio' => 'required|date',
        'fecha_fin' => 'nullable|date|after_or_equal:start_at',
        'esta_activo' => 'required|boolean',
    ];

    protected $messages = [
        'imagen.required' => 'La imágen de portada es requerida.',
        'imagen.image' => 'La imágen de portada tiene que ser de tipo imágen.',
        'imagen.max' => 'La imágen de portada es muy pesada.',

        'titulo.required' => 'El título de portada es requerido.',
        'titulo.string' => 'El título de portada debe ser un conjunto de caracteres válidos.',
        'titulo.max' => 'El título de portada debe tener máximo 255 caracteres.',

        'fecha_inicio.required' => 'La fecha de inicio de la portada es requerida.',
        'fecha_inicio.date' => 'La fecha de inicio de la portada debe ser de tipo fecha.',

        'fecha_fin.date' => 'La fecha de finalización de la portada debe ser de tipo fecha.',
        'fecha_fin.after_or_equal' => 'La fecha de finalización de la portada debe ser mayor a la fecha de inicio.',

        'esta_activo.required' => 'El campo de validación de actividad es requerido.',
        'esta_activo.boolean' => 'El campo de validación de actividad debe ser un valor booleano.',
    ];

    public function updatedImagen()
    {
        $this->temporary_url = $this->imagen->temporaryUrl();
    }

    public function openModalAddPortada()
    {
        $this->reset(['imagen', 'titulo', 'fecha_inicio', 'fecha_fin', 'esta_activo', 'imagen_path', 'show_modal_add_portada']);
        $this->resetValidation();
        $this->show_modal_add_portada = true;
    }

    public function savePortada()
    {
        $this->validate();
        $this->imagen_path = Storage::put('portadas', $this->imagen);
        $this->portada = Portada::create([
            'imagen_path' => $this->imagen_path,
            'titulo' => $this->titulo,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'esta_activo' => $this->esta_activo,
            'unidad_id' => 1,
        ]);

        dd($this->portada);

        $this->reset(['imagen', 'titulo', 'fecha_inicio', 'fecha_fin', 'esta_activo', 'imagen_path', 'show_modal_add_portada']);
        $this->resetValidation();

    }

    public function render()
    {
        return view('livewire.admin.show-portada');
    }
}
