<?php

namespace App\Http\Livewire\Evento;

use App\Models\Evento;
use App\Models\Invitado;
use App\Models\Organizador;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class ShowEventosUsuario extends Component
{
    public $user_id;
    public $organizador;

    public function render()
    {
        $this->user_id = Auth::user(); 
        $this->organizador = Organizador::where('user_id', $this->user_id->id)->get()->first();   
        $eventos= Evento::select('eventos.*')
        ->join('invitacions','eventos.invitacion_id','=','invitacions.id')
        ->join('estudio_fotograficos','invitacions.estudio_fotografico_id','=','estudio_fotograficos.id')
        ->where('estudio_fotograficos.id','=',$this->organizador->id)->get();        
        $invitaciones = Invitado::where('user_id',$this->user_id->id)->get();
       
        
        return view('livewire.evento.show-eventos-usuario',compact('eventos', 'invitaciones'));
    }
}
