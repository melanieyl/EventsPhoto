<?php

namespace App\Http\Livewire\Evento;

use App\Models\EstudioFotografico;
use App\Models\Evento;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowEventoFotografo extends Component
{
    public $user_id;
        public $estudioFotografico;
    


    public function render()
    {
        $this->user_id = Auth::user(); 
        $this->estudioFotografico = EstudioFotografico::where('user_id', $this->user_id->id)->get()->first();   
        $eventos= Evento::select('eventos.*')
        ->join('invitacions','eventos.invitacion_id','=','invitacions.id')
        ->join('estudio_fotograficos','invitacions.estudio_fotografico_id','=','estudio_fotograficos.id')
        ->where('estudio_fotograficos.id','=',$this->estudioFotografico->id)->get();
        ;
        return view('livewire.evento.show-evento-fotografo',compact('eventos'));
    }
}
