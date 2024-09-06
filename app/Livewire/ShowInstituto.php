<?php

namespace App\Livewire;

use App\Models\InstitutoTecnicoSuperior;
use Livewire\Component;

class ShowInstituto extends Component
{

    public $search = '';
    public $institutos;
    public $expandedBibliografias = [];

    public function mount()
    {
        // $this->tipos = Tipo::with('bibliografias')->get();
        $this->institutos = InstitutoTecnicoSuperior::all();
    }

    public function updatedSearch()
    {
        $this->filterInstitutos();
    }

    protected function filterInstitutos()
    {
        if ($this->search) {
            // $this->tipos = Tipo::whereHas('bibliografias', function ($query) {
            //     $query->where('descripcion', 'like', '%' . $this->search . '%');
            // })
            // ->with(['bibliografias' => function ($query) {
            //     $query->where('descripcion', 'like', '%' . $this->search . '%');
            // }])->get();
            $this->institutos = InstitutoTecnicoSuperior::where('descripcion', 'like', '%' . $this->search . '%')
                                                            ->orWhere('provincia', 'like', '%' . $this->search . '%')
                                                            ->orWhere('municipio', 'like', '%' . $this->search . '%')
                                                            ->orWhere('creacion', 'like', '%' . $this->search . '%')
                                                            ->get();
        } else {
            // $this->tipos = Tipo::with('bibliografias')->get();
            $this->institutos = InstitutoTecnicoSuperior::all();
        }
    }


    public function render()
    {
        $this->filterInstitutos();
        return view('livewire.show-instituto');
    }
}
