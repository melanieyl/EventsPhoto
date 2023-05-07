<?php

namespace App\Http\Livewire\EstudioFotografico;

use App\Models\Especialidad;
use Livewire\Component;

class EspecialidadLivewire extends Component
{

    public $especialidades;  // la variables donde guardo todo 
    public $NombreE, $Descripcion, $CantidadFotos, $PrecioE;  // los datos del estudio fotografico   
    public $modal_add = false;
    public $modal_edit = false;
    public $estudioFotograficoId;

    protected $listeners = ['render', 'delete'];

    public function mount($estudiofotografico_id)    {       
        $this->estudioFotograficoId = $estudiofotografico_id->id;    
        $this->especialidades =Especialidad::where('estudio_fotografico_id', $this->estudioFotograficoId)->get();    
    }
    public function actualizar(){
        $this->especialidades =Especialidad::where('estudio_fotografico_id', $this->estudioFotograficoId)->get();
    }
    protected $rules = [
        'NombreE'=>'required',
        'Descripcion'=>'required',
        'CantidadFotos'=>'required',
        //'estudio_fotografico_id'=>'required',
        'PrecioE'=>'required'
    ];  

    //Mensajes de las validaciones
    protected $messages = [
        'Nombre'=>'El Nombre del Fotografo es Obligatorio',
        'Descripcion'=>'es necesario',
        'CantidadFotos'=>'required',
        'PrecioE'=>'required'
    ];

    public function open_add()
    {
        $this->modal_add = true;
    } 


    public function open_edit($id)
    {
        $this->especialidades = Especialidad::find($id);
        $this->NombreE = $this->especialidades->NombreE;
        $this->Descripcion = $this->especialidades->Descripcion;
        $this->CantidadFotos = $this->especialidades->CantidadFotos;
        $this->PrecioE = $this->especialidades->PrecioE;
        $this->modal_edit = true;
    }

    public function save()
    {
        $this->validate();

        Especialidad::create([         
            'NombreE'=> $this->NombreE, 
            'Descripcion'=> $this->Descripcion,
            'CantidadFotos'=> $this->CantidadFotos,
            'estudio_fotografico_id'=> $this->estudioFotograficoId,
            'PrecioE'=> $this->PrecioE,
        ]);

        $this->reset(['modal_add','NombreE','Descripcion','CantidadFotos', 'PrecioE']);
        $this->actualizar();
    }

    public function update()
    {
        $this->validate();
          
            $this->especialidades->NombreE=$this->NombreE;
            $this->especialidades->Descripcion=$this->Descripcion;
            $this->especialidades->CantidadFotos=$this->CantidadFotos; 
            $this->especialidades->PrecioE=$this->PrecioE;
            $this->especialidades->update();

            $this->reset(['modal_edit', 'NombreE','Descripcion','CantidadFotos', 'PrecioE']);
    }

    // public function delete($id)
    // {
    //     $especialidades = Especialidad::find($id);
    //     $especialidades->delete();
        
    // }
    public function render()
    {
        
        return view('livewire.estudio-fotografico.especialidad-livewire');
    }
}
