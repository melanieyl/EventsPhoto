<?php

namespace App\Http\Livewire\Evento;

use App\Models\Evento;
use App\Models\Fotografia;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class SubirFoto extends Component

{
    use WithFileUploads;
    public $imagen;
    public $privada;
    public $Evento;
    
    protected $listeners = ["notiAparecesFoto"];

    public function guardar(){
        

        $nombre = $this->imagen->getClientOriginalName();
        $ruta = $this->imagen->storeAs('public/imagenes/' , $nombre);
        $url = Storage::url($ruta);       
        $usuarios = [];
        $directorios = Storage::Directories('public/usuarios');
        foreach ($directorios as $dir) {
            $carpeta = str_replace('public/usuarios/', '', $dir);
            array_push( $usuarios, $carpeta);
        }

        $this->emit('face-api', $usuarios);

    }
    public function guardarPrivada(){
        

        $nombre = $this->imagen->getClientOriginalName();
        $ruta = $this->imagen->storeAs('public/imagenes/' , $nombre);
        $url = Storage::url($ruta);    
        
        Fotografia::create(
            [            
                'Direccion'=>$url,
                'Precio'=>15,
                'evento_id'=>$this->Evento->id,
            ]
            );       
       
    }
    public function notiAparecesFoto($idusuarios){
        dd($idusuarios);
        //hacer un ciclo for donde solo se aparecen los id y no los Unknow.
    }
    
    public function mount($evento){
    $this->Evento= Evento::find($evento);
    }
    public function render( )
    {
        
        return view('livewire.evento.subir-foto');
    }
}
