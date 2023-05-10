<?php

namespace App\Http\Livewire\Usuario;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class FotosPerfil extends Component
{
    use WithFileUploads;  //manejo de subidas de archivos
    public $imagen, $imagen1, $imagen2;

    protected $listeners = ["notiAparecesFoto"];

    // yo debo de guardar la imagen en una tabla, y la carpeta donde la guarde mejor si tiene el nombre. 
    //por el momento solo lo esta guardando rap
    public function guardar(){
        $usuario = Auth::user();     

        if( $usuario->foto1==null){
            $ruta = $this->imagen->storeAs('public/usuarios/'. $usuario->id,'1.jpg');
            $url = Storage::url($ruta);
            DB::table('users')->where('id', $usuario->id)->update(['foto1' => $url]);
            return $this->render(); 
        }
        if( $usuario->foto2==null){            
            $ruta = $this->imagen->storeAs('public/usuarios/'. $usuario->id,'2.jpg');
            $url = Storage::url($ruta);
            DB::table('users')->where('id', $usuario->id)->update(['foto2' => $url]);
            return $this->render();
        }    
        return  $this->render();  
       
    }   
    public function render()
    {
        $usuario = Auth::user();  
        $this->imagen1= $usuario->foto1;
        $this->imagen2=$usuario->foto2;
        return view('livewire.usuario.fotos-perfil');
    }
}
