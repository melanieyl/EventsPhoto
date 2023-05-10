<?php

namespace App\Http\Livewire\Evento;

use App\Models\Evento;
use App\Models\Fotografia;
use App\Models\Transaccion;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use PhpParser\Node\Expr\List_;

class InteligenciaArtificial extends Component
{

    use WithFileUploads;
    public $imagen;
    public $Evento;
    public $datos_id; 
    public $fotografia; 
    public $usuariosecontrados; 

    protected $listeners = ["notiAparecesFoto"];


    public function guardar(){
        $nombre = $this->imagen->getClientOriginalName();
        $ruta = $this->imagen->storeAs('public/imagenes' , $nombre);
        $url = Storage::url($ruta);
       $this->fotografia =  Fotografia::create(
            [
                'Direccion' => $url,
                'Precio' => 15,
                'estado' => false,
                'evento_id' => $this->Evento->id,
            ]
        );
        $usuarios = [];
        $directorios = Storage::Directories('public/usuarios');
        foreach ($directorios as $dir) {
            $carpeta = str_replace('public/usuarios/', '', $dir);
            array_push( $usuarios, $carpeta);
        }
        $this->emit('face-api', $usuarios);
    }
   

    public function notiAparecesFoto($idusuarios){
          $id = collect();
        foreach ($idusuarios as $key => $usuario) {
            $idusuarios[$key] = htmlspecialchars_decode($usuario);
            // Decodifica cada valor en el array
            if($idusuarios[$key] == 'unknown'){              
                $this->usuariosecontrados = 'existen desconocidos';
            }else{
                $id->push($idusuarios[$key]);
            }            
        }       
         
       if ($id->isNotEmpty()){
        $this->datos_id = $id->unique();
        foreach ($this->datos_id as $item) {  
                  
            Transaccion::create([
                'usuario_id'=> $item,
                'fotografia_id'=>$this->fotografia->id,    
              ] );
        }    
       }    
    }


    public function mount($evento_id)
    {
        $this->Evento = Evento::find($evento_id);
    }
        
    
    
    public function render()
    {

        return view('livewire.evento.inteligencia-artificial');
    }
}
