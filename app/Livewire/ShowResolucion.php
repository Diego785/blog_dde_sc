<?php

namespace App\Livewire;

use App\Models\Resolucion;
use Livewire\Component;

class ShowResolucion extends Component
{
    public $search = '';
    public $resolutions;
    public $expandedResolutions = [];

    public function mount()
    {
        $this->resolutions = Resolucion::all();
    }

    public function updatedSearch()
    {
        $this->filterResolutions();
    }

    protected function filterResolutions()
    {
        if ($this->search) {
            $this->resolutions = Resolucion::where('titulo', 'like', '%' . $this->search . '%')->get();
        } else {
            $this->resolutions = Resolucion::all();
        }
    }

    public function render()
    {
        $this->filterResolutions();
        return view('livewire.show-resolucion');
    }
}
