<?php

namespace App\Http\Livewire\Evento;

use App\Models\Evento;
use App\Models\Fotografia;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

use function Termwind\render;

class SubirFoto extends Component

{
    use WithFileUploads;
    public $imagen;
    public $privada;
    public $Evento;

    public function guardarPrivada()
    {
        if ($this->privada != null) {
            foreach ($this->privada as $im) {
                $nombre = $im->getClientOriginalName();
                $ruta = $im->storeAs('public/imagenesprivadas/', $nombre);
                $url = Storage::url($ruta);
                Fotografia::create(
                    [
                        'Direccion' => $url,
                        'Precio' => 15,
                        'estado' => true,
                        'evento_id' => $this->Evento->id,
                    ]
                );
            }
            return $this->render();
        }

    }
    public function mount($evento)
    {
        $this->Evento = Evento::find($evento);
    }
    public function deleteImage(Fotografia $image)
    {
        Storage::delete(asset($image->Direccion));
                $image->delete();
        return $this->render();
    }

    public function render()
    {
       // $fotografias= Fotografia::where('evento_id',$this->Evento->id)->get();
        $fotografias = Fotografia::where('evento_id', $this->Evento->id)
                          ->where('estado', true)
                          ->get();
        $fotografiasPublicas = Fotografia::where('evento_id', $this->Evento->id)
                          ->where('estado', false)
                          ->get();


        return view('livewire.evento.subir-foto',compact('fotografias'), compact('fotografiasPublicas'));
    }
}
