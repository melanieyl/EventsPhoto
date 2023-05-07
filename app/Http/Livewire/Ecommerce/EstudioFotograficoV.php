<?php

namespace App\Http\Livewire\Ecommerce;

use App\Models\Especialidad;
use App\Models\EstudioFotografico;
use Livewire\Component;

class EstudioFotograficoV extends Component
{
    Public $estudiosFotograficos=[];
    public $especialidades = [];
    protected $listeners = ['especialidad'];
    public function mount(){
        $this->estudiosFotograficos = EstudioFotografico::all();        
       
    }
    public function especialidad($id){
    $this->especialidades =Especialidad::where('estudio_fotografico_id', $id)->get();

    dd($this->especialidades);
    }
    public function render(){  
        
        return view('livewire.ecommerce.estudio-fotografico-v');

    }
}
