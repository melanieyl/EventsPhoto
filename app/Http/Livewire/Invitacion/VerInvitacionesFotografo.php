<?php

namespace App\Http\Livewire\Invitacion;

use App\Models\EstudioFotografico;
use App\Models\Evento;
use App\Models\Invitacion;
use Carbon\Cli\Invoker;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VerInvitacionesFotografo extends Component
{

    public $user_id;
    public $invitaciones;
    public $estudioFotografico;
    public $organizador_id;
    public $invitacionesAceptadas;
    public $invitacionesEspera;
    protected $listeners = ['render'];
    public function mount(){
        // $this->user_id = Auth::user(); 
        $this->user_id = Auth::user(); 
        $this->estudioFotografico = EstudioFotografico::where('user_id', $this->user_id->id)->get()->first();     
      
       $this->invitaciones = Invitacion::where('estudio_fotografico_id',$this->estudioFotografico->id)->get();

       $this->invitacionesAceptadas = Invitacion::where('estudio_fotografico_id',$this->estudioFotografico->id)
       ->where(function($query){
        $query->where('EstadoI',true);
       })->get();
       $this->invitacionesEspera = Invitacion::where('estudio_fotografico_id',$this->estudioFotografico->id)
       ->where(function($query){
        $query->where('EstadoI',false);
       })->get();
      

    }
    public function update($id){
           $invitacion = Invitacion::find($id);
           $invitacion->EstadoI = true;
           $invitacion ->update();
           $this->mount();
        //    Evento::create([
        //    'qr'=>'melanie',
        //    'invitacion_id'=>$id,     
        //  ]);
    }
    public function render()
    {
        
        return view('livewire.invitacion.ver-invitaciones-fotografo');
    }
}
