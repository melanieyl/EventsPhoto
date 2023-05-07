<?php

namespace App\Http\Livewire\Ecommerce;

use App\Models\Suscripciones;
use App\Models\SuscripcionUsuario;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowMySuscripciones extends Component
{
    public $MySuscripciones;
    public function render()
    {
        $user_id = Auth::user();
        $this->MySuscripciones = SuscripcionUsuario::where('user_id',$user_id->id)->get();

        return view('livewire.ecommerce.show-my-suscripciones');
    }
}
