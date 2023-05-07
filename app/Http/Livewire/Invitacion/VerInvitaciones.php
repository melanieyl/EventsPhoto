<?php

namespace App\Http\Livewire\Invitacion;

use App\Models\Invitacion;
use App\Models\Organizador;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VerInvitaciones extends Component
{
    public $user_id;
    public $invitaciones;
    public $organizador;
    public $organizador_id;
    public $invitacionesAceptadas;
    public $invitacionesEspera;
    public function mount(){
        // $this->user_id = Auth::user(); 
        $this->user_id = Auth::user(); 
        $this->organizador = Organizador::where('user_id', $this->user_id->id)->get()->first();      
       //$this->organizador_id = $this->organizadores->id;
       //dd($this->organizador->id);
       $this->invitaciones = Invitacion::where('organizador_id',$this->organizador->id)->get();
       $this->invitacionesAceptadas = Invitacion::where('organizador_id',$this->organizador->id)
       ->where(function($query){
        $query->where('EstadoI',true);
       })->get();
       $this->invitacionesEspera = Invitacion::where('organizador_id',$this->organizador->id)
       ->where(function($query){
        $query->where('EstadoI',false);
       })->get();
      

    }

    public function render()
    {
        return view('livewire.invitacion.ver-invitaciones');
    }
}
