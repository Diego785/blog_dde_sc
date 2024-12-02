<?php

namespace App\Livewire;

use App\Models\AnexoDenuncia;
use App\Models\Denuncia;
use App\Models\Denunciante;
use App\Models\Distrito;
use App\Models\FormularioDenuncia;
use App\Models\PersonaDenunciada;
use App\Models\RelacionHechoDenuncia;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormDenuncia extends Component
{
    use WithFileUploads;

    public $show_modal_denunciado = false;



    public $docs = [];
    public $newDoc;


    //DENUNCIANTE
    public $nombre_denunciante = '';
    public $carnet_denunciante = '';
    public $domicilio_denunciante = '';
    public $identidad_reserva_denunciante = false;
    public $correo_denunciante = '';
    public $telefono_denunciante = '';
    public $seguimiento_email_denunciante = false;


    //DENUNCIA
    public $direccion_general;
    public $unidad_educativa;
    public $distritos;
    public $distrito = "";
    public $zona;
    public $barrio;
    public $referencia;

    //DENUNCIADOS
    public $nombre;
    public $cargo;
    public $personas_denunciadas = [];
    public $persona_denunciada;
    public $editing_index = null;

    //HECHOS
    public $fecha;
    public $hora;
    public $lugar;
    public $descripcion;
    // public $fecha_denuncia;
    // public $hora_denuncia;

    //LISTENERS
    protected $listeners = ['openDenunciadoModal' => 'openModalAddDenunciado', ''];

    //REGLAS
    protected $rules = [
        'nombre_denunciante' => 'required|string|min:3|max:50',
        'carnet_denunciante' => 'required|min:6|max:10',
        'domicilio_denunciante' => 'required|string|min:5|max:255',
        'correo_denunciante' => 'required|email',
        'telefono_denunciante' => 'required|integer',

        'direccion_general' => 'required|string',
        'unidad_educativa' => 'required|string',
        'distrito' => 'required|string',
        'zona' => 'required|string',
        'barrio' => 'required|string',
        'referencia' => 'required|string',

        'fecha' => 'required|date',
        'hora' => 'required|date_format:H:i',
        'lugar' => 'required|string',
        'descripcion' => 'required|string|max:255',
        // 'fecha_denuncia' => 'required|date',
        // 'hora_denuncia' => 'required|date_format:H:i'
    ];

    protected $rules_denunciado = [
        'nombre' => 'required|string|max:50',
        'cargo' => 'required|string|max:255',
    ];


    protected $messages = [
        'nombre_denunciante.required' => 'El nombre del denunciante es requerido.',
        'nombre_denunciante.string' => 'El nombre del denunciante solo puede contener letras.',
        'nombre_denunciante.min' => 'El nombre del denunciante debe tener mínimo 3 caracteres.',
        'nombre_denunciante.max' => 'El nombre del denunciante debe tener máximo 50 caracteres.',

        'carnet_denunciante.required' => 'El carnet del denunciante es requerido.',
        'carnet_denunciante.min' => 'El carnet del denunciante debe tener mínimo 6 caracteres.',
        'carnet_denunciante.max' => 'El carnet del denunciante debe tener máximo 10 caracteres.',

        'domicilio_denunciante.required' => 'El domicilio del denunciante es requerido.',
        'domicilio_denunciante.string' => 'El domicilio del denunciante solo puede contener letras.',
        'domicilio_denunciante.min' => 'El domicilio del denunciante debe tener mínimo 5 caracteres.',
        'domicilio_denunciante.max' => 'El domicilio del denunciante debe tener máximo 255 caracteres.',

        'correo_denunciante.required' => 'El correo es requerido.',
        'correo_denunciante.email' => 'El correo debe ser un correo electrónico válido.',

        'telefono_denunciante.required' => 'El teléfono es requerido.',
        'telefono_denunciante.integer' => 'El teléfono debe contener solo caracteres numéricos.',


        'direccion_general.required' => 'El nombre de la Dirección General es requerida.',
        'unidad_educativa.required' => 'El nombre de la Unidad Educativa es requerida.',
        'distrito.required' => 'El nombre del Distrito es requerido.',
        'zona.required' => 'El nombre de la Zona es requerido.',
        'barrio.required' => 'El nombre del barrio es requerido.',
        'referencia.required' => 'La referencia es requerida.',

        'fecha.required' => 'La fecha del hecho es requerida.',
        'fecha.date' => 'La fecha del hecho debe tener un formato válido.',
        'hora.required' => 'La hora del hecho es requerida.',
        'hora.date_format' => 'La hora del hecho debe tener un formato válido.',
        'lugar.required' => 'El nombre del lugar es requerido.',
        'descripcion.required' => 'La descripción del hecho es requerida.',
        'descripcion.string' => 'La descripción del hecho debe contener solo letras o números.',
        'descripcion.max' => 'La descripción debe tener un máximo de 255 caracteres.',
        // 'fecha_denuncia.required' => 'La fecha de la denuncia es requerida.',
        // 'fecha_denuncia.date' => 'La fecha de la denuncia debe tener un formato válido.',
        // 'hora_denuncia.required' => 'La hora de la denuncia es requerida.',
        // 'hora_denuncia.date_format' => 'La hora de la denuncia debe tener un formato válido.',

    ];

    protected $messages_denunciado = [
        'nombre.required' => 'El nombre del denunciado es requerido.',
        'nombre.string' => 'El nombre del denunciado solo debe contener caracteres válidos.',
        'nombre.max' => 'El nombre del denunciado es muy largo.',
        'cargo.required' => 'El cargo del denunciado es requerido.',
        'cargo.string' => 'El cargo del denunciado solo debe contener caracteres válidos.',
        'cargo.max' => 'El cargo del denunciado es muy largo.',
    ];




    public function mount()
    {
        $this->distritos = Distrito::all();
    }



    public function addDoc()
    {
        // Validate the uploaded file
        $this->validate([
            'newDoc' => 'required|file|max:10240', // Max 10 MB
        ], [
            'newDoc.required' => 'Por favor, seleccione un documento para cargar.',
            'newDoc.file' => 'El archivo seleccionado debe ser un documento válido.',
            'newDoc.max' => 'El archivo no debe exceder los 10 MB de tamaño.',
        ]);

        try {
            // Define the directory inside the 'public' disk
            $relativePath = 'anexos_denuncias';

            // Generate a unique file name
            $fileExtension = $this->newDoc->getClientOriginalExtension(); // File extension
            $fileName = uniqid('doc_') . '.' . $fileExtension; // Example: doc_abc123.pdf

            // Save the file to the 'public' disk (anexos_denuncias folder)
            $filePath = $this->newDoc->storeAs($relativePath, $fileName, 'public');

            // Save file details to the `$docs` array for display or later use
            $this->docs[] = [
                'name' => $fileName,
                'path' => Storage::disk('public')->url($filePath), // Public URL for the file
            ];

            // Reset the file input field
            $this->reset('newDoc');

            // Optionally log success
            \Log::info("Archivo subido exitosamente: {$fileName}");
        } catch (\Exception $e) {
            // Handle errors gracefully
            \Log::error("Error al cargar el archivo: " . $e->getMessage());
            $this->addError('newDoc', 'Hubo un error al cargar el documento. Intente nuevamente.');
        }
    }


    public function removeDoc($docPath)
    {
        // Get the full path to the file in the public folder
        $fullPath = public_path($docPath);

        // Check if the file exists and delete it
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }

        // Remove the document from the docs array
        $this->docs = array_filter($this->docs, fn($doc) => $doc['path'] !== $docPath);
    }




    public function updatedIdentidadReservaDenunciante($value)
    {
        $this->identidad_reserva_denunciante = filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }
    public function updatedSeguimientoEmailDenunciante($value)
    {
        $this->seguimiento_email_denunciante = filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

    public function openModalEditDenunciado($index)
    {
        $this->reset('show_modal_denunciado', 'nombre', 'cargo');
        $this->resetValidation();
        $this->editing_index = $index;
        $this->nombre = $this->personas_denunciadas[$index]['nombre'];
        $this->cargo = $this->personas_denunciadas[$index]['cargo'];
        $this->show_modal_denunciado = true;
    }

    public function openModalAddDenunciado()
    {
        $this->editing_index = null;
        $this->reset('show_modal_denunciado', 'nombre', 'cargo');
        $this->resetValidation();
        $this->show_modal_denunciado = true;
    }



    public function addDenunciado()
    {
        $this->validate($this->rules_denunciado, $this->messages_denunciado);

        if ($this->editing_index !== null) {
            $this->personas_denunciadas[$this->editing_index] = [
                'nombre' => $this->nombre,
                'cargo' => $this->cargo,
            ];
        } else {
            $this->personas_denunciadas[] = [
                'nombre' => $this->nombre,
                'cargo' => $this->cargo,
            ];
        }
        $this->editing_index = null;
        $this->reset('show_modal_denunciado', 'nombre', 'cargo');
        $this->resetValidation();
    }

    public function removeDenunciado($index)
    {

        if (isset($this->personas_denunciadas[$index])) {
            unset($this->personas_denunciadas[$index]);

            $this->personas_denunciadas = array_values($this->personas_denunciadas);
        }
    }



    public function saveDenuncia()
    {
        $this->validate();

        try {
            DB::beginTransaction();

            // Create Denunciante
            $denunciante = Denunciante::create([
                'nombre' => strtoupper($this->nombre_denunciante),
                'carnet' => $this->carnet_denunciante,
                'direccion' => $this->domicilio_denunciante,
                'mantener_identidad_reserva' => $this->identidad_reserva_denunciante,
                'correo_electronico' => $this->correo_denunciante,
                'telefono' => $this->telefono_denunciante,
                'seguimiento' => $this->seguimiento_email_denunciante,
            ]);

            // Create Denuncia
            $denuncia = Denuncia::create([
                'direccion_general' => $this->direccion_general,
                'unidad_educativa' => $this->unidad_educativa,
                'distrito' => $this->distrito,
                'zona' => $this->zona,
                'barrio' => $this->barrio,
                'referencia' => $this->referencia,
            ]);

            // Create RelacionHechoDenuncia
            $relacion = RelacionHechoDenuncia::create([
                'fecha_hecho' => Carbon::parse($this->fecha, 'America/La_Paz')->toDateString(),
                'hora_hecho' => Carbon::parse($this->hora, 'America/La_Paz')->toTimeString(),
                'lugar_hecho' => $this->lugar,
                'descripcion_hecho' => $this->descripcion,
                'fecha_denuncia' => Carbon::now('America/La_Paz')->toDateString(),
                'hora_denuncia' => Carbon::now('America/La_Paz')->toTimeString(),
            ]);

            // Create FormularioDenuncia
            $formulario = FormularioDenuncia::create([
                'unidad_id' => 1,
                'denuncia_id' => $denuncia->id,
                'denunciante_id' => $denunciante->id,
                'relacion_hecho_denuncia_id' => $relacion->id,
            ]);

            // Add each PersonaDenunciada
            foreach ($this->personas_denunciadas as $denunciado) {
                PersonaDenunciada::create([
                    'nombre' => $denunciado['nombre'],
                    'cargo' => $denunciado['cargo'],
                    'denuncia_id' => $denuncia->id,
                ]);
            }

            // Save documents in the specific directory for the Formulario ID
            foreach ($this->docs as $doc) {
                $newPath = 'anexos_denuncias/' . $formulario->id . '/' . basename($doc['path']);

                // Move the document to the specific folder for the Formulario ID
                \Storage::disk('public')->move($doc['path'], $newPath);

                // Save to the anexo_denuncias table
                AnexoDenuncia::create([
                    'nombre' => $doc['name'],
                    'path' => $newPath,
                    'formulario_denuncia_id' => $formulario->id,
                ]);
            }

            DB::commit();

            // Reset form fields after saving
            $this->reset([
                'nombre_denunciante',
                'carnet_denunciante',
                'domicilio_denunciante',
                'identidad_reserva_denunciante',
                'correo_denunciante',
                'telefono_denunciante',
                'seguimiento_email_denunciante',
                'direccion_general',
                'unidad_educativa',
                'distrito',
                'zona',
                'barrio',
                'referencia',
                'fecha',
                'hora',
                'lugar',
                'descripcion',
                'docs',
            ]);

            session()->flash('swal', [
                'icon' => 'success',
                'title' => '¡Bien Hecho!',
                'text' => 'Denuncia guardada correctamente.',
            ]);

            return redirect('/sder#inicio');
        } catch (\Exception $e) {
            DB::rollBack();
            $this->dispatch('swal', [
                'icon' => 'error',
                'title' => '¡Ups!',
                'text' => 'Algo salió mal. Inténtelo nuevamente: ' . $e->getMessage(),
            ]);
        }
    }




    public function render()
    {
        return view('livewire.form-denuncia');
    }
}
