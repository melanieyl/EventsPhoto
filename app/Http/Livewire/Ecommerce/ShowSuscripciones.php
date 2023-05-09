<?php

namespace App\Http\Livewire\Ecommerce;

use App\Models\Suscripciones;
use App\Models\SuscripcionUsuario;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Livewire;

class ShowSuscripciones extends Component
{

    public $suscripciones;
    public $modal_add = false;
    public $id_suscripcion;


    public function guardar()
    {
        if ($this->id_suscripcion != null) {
            $user_id = Auth::user();
            // SuscripcionUsuario::create(
            //     [
            //         'user_id' => $user_id->id,
            //         'suscripciones_id' => $this->id_suscripcion,
            //     ]
            // );
            // $this->modal_add = false;
           // return redirect()->route('order',5,$this->id_suscripcion); 
            return redirect()->route('order', ['cadena' => 5, 'id' => $this->id_suscripcion]);
 
           
        }
    }
    public function open_add()
    {
        $this->modal_add = true;
    }

    public function render()
    {
        $this->suscripciones = Suscripciones::all();

        return view('livewire.ecommerce.show-suscripciones',);
    }
}
