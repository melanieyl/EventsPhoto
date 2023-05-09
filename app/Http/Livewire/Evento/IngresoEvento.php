<?php

namespace App\Http\Livewire\Evento;

use App\Models\Evento;
use App\Models\Invitacion;
use App\Models\Invitado;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IngresoEvento extends Component
{
    public $id_usuario;
    public $Evento;

    public function mount($evento)
    {
        $this->id_usuario = Auth::user();
        $this->Evento  = Evento::find($evento);
        
    }
    public function guardar(){
        if($this->id_usuario!=null && $this->Evento != null){

           Invitado::create(
            [                        
                'evento_id'=>$this->Evento->id,
                'user_id'=>$this->id_usuario->id,
            ]
           
            );
            return redirect()->route('usuario.show_eventos');           

        }else{
            return redirect()->route('dashboard');     
        }        
    }

    public function render()
    {
       return view('livewire.evento.ingreso-evento');
    }
}
