<?php

namespace App\Livewire\Admin;

use App\Models\FormularioDenuncia;
use Livewire\WithPagination;
use Livewire\Component;

class ShowDenuncia extends Component
{
    use WithPagination;


    public $search = '';
    public $status = '0';

    protected $updatesQueryString = [
        'search' => ['except' => ''],
        'status' => ['except' => '0'],
    ];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedStatus()
    {
        $this->resetPage();
    }

    protected function filterFormDenuncias()
    {
        // Eager load all necessary relationships
        $query = FormularioDenuncia::with([
            'denunciante',
            'denuncia',
            'denuncia.personasDenunciadas',
            'relacionHechoDenuncia',
            'unidad'
        ])
            ->where(function ($query) {

                $query->where('id', 'like', '%' . $this->search . '%');
                // Search in related models
                $query->orWhereHas('denunciante', function ($query) {
                    if ($this->status === '2') {
                        $query->where('es_valido', 2); // ACEPTADO
                    } elseif ($this->status === '3') {
                        $query->where('es_valido', 3); // RECHAZADO
                    } elseif ($this->status === '4') {
                        $query->where('es_valido', 4); // EN ESPERA
                    } elseif ($this->status === '5') {
                        $query->where('es_valido', 5); // FINALIZADO
                    }
                    $query->where('id', 'like', '%' . $this->search . '%');
                })
                    ->orWhereHas('denuncia', function ($query) {
                        if ($this->status === '2') {
                            $query->where('es_valido', 2); // ACEPTADO
                        } elseif ($this->status === '3') {
                            $query->where('es_valido', 3); // RECHAZADO
                        } elseif ($this->status === '4') {
                            $query->where('es_valido', 4); // EN ESPERA
                        } elseif ($this->status === '5') {
                            $query->where('es_valido', 5); // FINALIZADO
                        }
                        $query->where('unidad_educativa', 'like', '%' . $this->search . '%');
                    });
            })
            ->orderBy('id', 'desc');

        return $query;
    }



    public function render()
    {
        $query = $this->filterFormDenuncias();

        $form_denuncias = $query->paginate(10);

        return view('livewire.admin.show-denuncia', [
            'form_denuncias' => $form_denuncias
        ]);
    }
}
