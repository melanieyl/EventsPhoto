<?php

namespace App\Http\Livewire\Evento;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class InteligenciaArtificial extends Component
{

    use WithFileUploads;
    public $imagen;
    protected $listeners = ["notiAparecesFoto"];


    public function guardar(){
        $nombre = $this->imagen->getClientOriginalName();
        $ruta = $this->imagen->storeAs('public/imagenes' , $nombre);
        $url = Storage::url($ruta);

        $usuarios = [];

        $directorios = Storage::Directories('public/usuarios');
        foreach ($directorios as $dir) {
            $carpeta = str_replace('public/usuarios/', '', $dir);
            array_push( $usuarios, $carpeta);
        }

        $this->emit('face-api', $usuarios);
    }

    public function notiAparecesFoto($idusuarios){
        dd($idusuarios);
        //hacer un ciclo for donde solo se aparecen los id y no los Unknow.
    }
    public function render()
    {
        return view('livewire.evento.inteligencia-artificial');
    }
}
