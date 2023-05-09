<?php

namespace App\Http\Livewire\Evento;

use App\Models\Evento;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowEvento extends Component
{
    public $Evento; 
    public $text; 
    public $verif_organizador; 
    public function mount($evento){
        $this->Evento= Evento::find($evento);
        $this->text = 'http://127.0.0.1:8000/ShowEvento/' . $evento;
        $organizador= $this->Evento->invitacion->organizador->user->id;
        $user_id = Auth::user();
        if( $organizador ==$user_id->id){
            $this->verif_organizador= true; 
        }else{
            $this->verif_organizador= false;
        }

      
    }

    public function render()
    {
        return view('livewire.evento.show-evento');
    }
}
