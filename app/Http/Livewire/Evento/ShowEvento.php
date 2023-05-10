<?php

namespace App\Http\Livewire\Evento;

use App\Models\Evento;
use App\Models\Fotografia;
use App\Models\Transaccion;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowEvento extends Component
{
    public $Evento; 
    public $text; 
    public $miImagen; 
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
        $fotografias = Fotografia::where('evento_id', $this->Evento->id)
        ->where('estado', true)
        ->get();
       $fotografiasPublicas = Fotografia::where('evento_id', $this->Evento->id)
        ->where('estado', false)
        ->get();
        $user_id = Auth::user();
        $this->miImagen= Transaccion::where( 'usuario_id', $user_id->id )->get();

        return view('livewire.evento.show-evento', compact('fotografias'), compact('fotografiasPublicas'));
    }
}
