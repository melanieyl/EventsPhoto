<?php

namespace App\Http\Livewire\EstudioFotografico;

use App\Models\EstudioFotografico;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateEstudioFotografico extends Component
{
    public $estudio_fotografico;  // la variables donde guardo todo 
    public $NombreEF, $DescripcionEF, $UbicacionEF, $telefono;  // los datos del estudio fotografico 
    public $user_id; //mi llave foranea
    public $modal_add = false;
    public $modal_edit = false;

    protected $listeners = ['render', 'delete'];


    //Validaciones del formulario
    protected $rules = [
        'NombreEF'=>'required',
        'DescripcionEF'=>'required',
        'UbicacionEF'=>'required',
        'user_id'=>'required',
       'telefono'=>'required'
    ];  

    //Mensajes de las validaciones
    protected $messages = [
        'NombreEF'=>'El Nombre del Fotografo es Obligatorio',
        'DescripcionEF'=>'',
        'UbicacionEF'=>'required',
        'telefono'=>'required'
    ];

    public function open_add()
    {
        $this->modal_add = true;
    }

    Public function mount(){
        $this->user_id = Auth::user();       
        $this->estudio_fotografico = EstudioFotografico::find($this->user_id->id);

    }


    public function open_edit()
    {
        $this->estudio_fotografico = EstudioFotografico::find($this->user_id->id);
        $this->NombreEF = $this->estudio_fotografico->NombreEF;
        $this->DescripcionEF = $this->estudio_fotografico->DescripcionEF;
        $this->UbicacionEF = $this->estudio_fotografico->UbicacionEF;
        $this->telefono = $this->estudio_fotografico->telefono;
        $this->modal_edit = true;
    }

    public function save()
    {
        $this->validate();

        EstudioFotografico::create([         
            'NombreEF'=> $this->NombreEF, 
            'DescripcionEF'=> $this->DescripcionEF,
            'UbicacionEF'=> $this->UbicacionEF,
            'user_id'=> $this->user_id->id,
            'telefono'=> $this->telefono,
        ]);

        $this->reset(['modal_add','NombreEF','DescripcionEF','UbicacionEF', 'telefono']);
    }

    public function update()
    {
        $this->validate();
          
            $this->estudio_fotografico->NombreEF=$this->NombreEF;
            $this->estudio_fotografico->DescripcionEF=$this->DescripcionEF;
            $this->estudio_fotografico->UbicacionEF=$this->UbicacionEF; 
            $this->estudio_fotografico->telefono=$this->telefono;
            $this->estudio_fotografico->update();

            $this->reset(['modal_edit', 'NombreEF','DescripcionEF','UbicacionEF', 'telefono']);
    }

    public function delete($id)
    {
        $estructura = EstudioFotografico::find($id);
        $estructura->delete();
    }


    public function render()
    {
        return view('livewire.estudio-fotografico.create-estudio-fotografico');
    }
}
