<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bibliografia;
use App\Models\Tipo;

class ShowBibliografia extends Component
{

    public $search = '';
    public $tipos;
    public $expandedBibliografias = [];

    public function mount()
    {
        $this->tipos = Tipo::with('bibliografias')->get();
    }

    public function updatedSearch()
    {
        $this->filterBibliografias();
    }

    protected function filterBibliografias()
    {
        if ($this->search) {
            $this->tipos = Tipo::whereHas('bibliografias', function ($query) {
                $query->where('descripcion', 'like', '%' . $this->search . '%');
            })
            ->with(['bibliografias' => function ($query) {
                $query->where('descripcion', 'like', '%' . $this->search . '%');
            }])->get();
        } else {
            $this->tipos = Tipo::with('bibliografias')->get();
        }
    }

    public function toggleDescription($bibliografiaId)
    {
        if (isset($this->expandedBibliografias[$bibliografiaId])) {
            unset($this->expandedBibliografias[$bibliografiaId]);
        } else {
            $this->expandedBibliografias[$bibliografiaId] = true;
        }
    }


    public function render()
    {
        $this->filterBibliografias();
        return view('livewire.show-bibliografia');
    }
}
