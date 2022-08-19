<?php

namespace App\Http\Livewire\Prontuario;

use Livewire\Component;
use App\Models\Persona;
use Livewire\WithPagination;

class ShowProntuarios extends Component
{

    use WithPagination;
    
    public $busqueda;

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
         $resultados = Persona::join("persidentificaciones", "persidentificaciones.persona_id", "=", "personas.id")
                ->where('nombre', 'like', '%' . $this->busqueda . '%')
                ->orWhere('apellido', 'like', '%' . $this->busqueda . '%')
                ->orWhere('nroDocumento', 'like', '%' . $this->busqueda . '%')
                ->orWhere('nroProntuario', 'like', '%' . $this->busqueda . '%')
                ->orderBy('apellido', 'asc')
                ->paginate(50);

        return view('livewire.prontuario.show-prontuarios', compact('resultados'));
    }
}
