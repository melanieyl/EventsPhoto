<?php

namespace App\Http\Livewire\Usuario;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class FotosPerfil extends Component
{
    use WithFileUploads;  //manejo de subidas de archivos
    public $imagen;
    protected $listeners = ["notiAparecesFoto"];

    // yo debo de guardar la imagen en una tabla, y la carpeta donde la guarde mejor si tiene el nombre. 
    //por el momento solo lo esta guardando rap
    public function guardar(){
        $usuario = DB::table('users')->where('id', auth()->user()->id)->first();

        $nombre = $this->imagen->getClientOriginalName();
       // $ruta = $this->imagen->storeAs('public/imagenes' , $nombre);
        $ruta = $this->imagen->storeAs('public/usuarios/'. $usuario->id, $nombre);
        $url = Storage::url($ruta);

        
    }   

    public function render()
    {
        return view('livewire.usuario.fotos-perfil');
    }
}
