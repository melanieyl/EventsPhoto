<?php

namespace App\Http\Livewire\Invitacion;

use App\Models\Especialidad;
use App\Models\EstudioFotografico;
use App\Models\Invitacion;
use App\Models\Organizador;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CrearInvitacionUsuario extends Component
{
    Public $especialidades;
    public $invitacion; 
    public $modal_add = false;
   
    public $NombreI;
    public $DescripcionI;
    public $UbicacionI;
    public $DuracionI;
    public $EstadoI;
    public $fecha;
    public $organizador_id ;
    public $especialidad_id;
    public $estudio_fotografico_id;  
    public $organizadores;
    public $user_id;
    protected $listeners = ['render'];

    public function mount(EstudioFotografico $estudiofotografico){
        $this->estudio_fotografico_id = $estudiofotografico->id;   
        $this->user_id = Auth::user(); 
        $this->organizadores = Organizador::where('user_id', $this->user_id->id)->get()->first();      
        $this->organizador_id = $this->organizadores->id;        
        $this->especialidades =Especialidad::where('estudio_fotografico_id', $this->estudio_fotografico_id)->get();
    }
    protected $rules = [
        'NombreI'=>'required',
        'DescripcionI'=>'required',
        'UbicacionI'=>'required',
        'DuracionI'=>'required',
        'fecha'=>'required',
        'organizador_id'=>'required',
        'especialidad_id'=>'required',
        'estudio_fotografico_id'=>'required',
    ];  
    
    protected $messages = [
        'NombreI'=>'Introduzca el nombre',
        'DescripcionI'=>'Introduzca la descripcion ',
        'UbicacionI'=>'Introduzca la ubicacion ',
        'DuracionI'=>'Introduzca la duracion ',
        'fecha'=>'Introduzca la fecha',             
        'especialidad_id'=>'required',        
    ];
    public function open_add()
    {
        $this->modal_add = true;
    }
    public function save()
    {
      //dd($this->organizador_id, $this->especialidad_id, $this->estudio_fotografico_id);
        $this->validate();
        //dd($this->organizador_id, $this->especialidad_id, $this->estudio_fotografico_id);

        Invitacion::create([      
        'NombreI'=>$this->NombreI,
        'DescripcionI'=>$this->DescripcionI,
        'UbicacionI'=>$this->UbicacionI,
        'DuracionI'=>$this->DuracionI,
        'EstadoI'=>false,
        'fecha'=>$this->fecha,
        'organizador_id'=>$this->organizador_id,
        'especialidad_id'=>$this->especialidad_id,
        'estudio_fotografico_id'=>$this->estudio_fotografico_id,
        ]);

        $this->reset(['modal_add','NombreI','DescripcionI','UbicacionI', 'DuracionI','EstadoI','fecha','organizador_id','especialidad_id','estudio_fotografico_id']);
    }

    public function render()
    {
        return view('livewire.invitacion.crear-invitacion-usuario');
    }
}
