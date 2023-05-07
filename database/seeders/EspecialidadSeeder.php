<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Especialidad::create([
            'Descripcion' => 'descripcion del estudio ftografico 1 boda',
            'NombreE' => 'Bodas',
            'CantidadFotos' => 15,
            'PrecioE' => 200,
            'estudio_fotografico_id'=>1,
        ]); 
        Especialidad::create([
            'Descripcion' => 'descripcion del estudio ftografico 1 cumpleaños',
            'NombreE' => 'cumpleaños',
            'CantidadFotos' => 15,
            'PrecioE' => 300,
            'estudio_fotografico_id'=>1,
        ]); 
        Especialidad::create([
            'Descripcion' => 'descripcion del estudio ftografico 1 quince años',
            'NombreE' => 'quince años',
            'CantidadFotos' => 8,
            'PrecioE' => 500,
            'estudio_fotografico_id'=>1,
        ]); 
        Especialidad::create([
            'Descripcion' => 'descripcion del estudio ftografico 1 viaje',
            'NombreE' => 'viaje',
            'CantidadFotos' => 20,
            'PrecioE' => 200,
            'estudio_fotografico_id'=>2,
        ]); 
        Especialidad::create([
            'Descripcion' => 'descripcion del estudio ftografico 1 cumpleaños perros',
            'NombreE' => 'cumpleaños perros',
            'CantidadFotos' => 10,
            'PrecioE' => 300,
            'estudio_fotografico_id'=>2,
        ]); 
       
      
    }
}
