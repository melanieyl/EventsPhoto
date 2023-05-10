<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Especialidad;
use App\Models\EstudioFotografico;
use Illuminate\Http\Request;

class EstudioFotogrficoController extends Controller

{
        
    public function __invoke(EstudioFotografico $estudiofotografico){
        $especialidades =Especialidad::where('estudio_fotografico_id', $estudiofotografico->id)->get();
       
        // return view('ecommerce.estudiofotografico',compact('estudiofotografico'),compact('especialidades'));
     
        return view('Ecommerce.estudiofotografico', compact('estudiofotografico', 'especialidades'));

    }

    
}
