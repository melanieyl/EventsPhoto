<?php

namespace App\Http\Livewire\Evento;

use App\Models\Evento;
use Livewire\Component;

class ShowEvento extends Component
{
    public $Evento; 
    public $text; 
    public function mount($evento){

        $this->Evento= Evento::find($evento);
        $this->text = 'http://127.0.0.1:8000/ShowEvento/' . $evento;
    
      
    }

    public function render()
    {
        return view('livewire.evento.show-evento');
    }
}
