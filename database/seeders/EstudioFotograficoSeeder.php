<?php

namespace Database\Seeders;

use App\Models\EstudioFotografico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudioFotograficoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstudioFotografico::create([
            'NombreEF' => 'Estudio Fotografico melanei',
            'DescripcionEF' => 'Este es un estudio Fotografico que organiza bodas y una variedad de especialidades',
            'UbicacionEF' => 'avendida centenario ',
            'telefono' => '78565231',
            'user_id' => '2',
        ]);    
        EstudioFotografico::create([
            'NombreEF' => 'Estudio Fotografico Juanito',
            'DescripcionEF' => 'Guardando todas tus memorias y momentos agradables, te ofrece una variedad de paquetes',
            'UbicacionEF' => ' avenida cuerllas',
            'telefono' => '78565231',
            'user_id' => '3',
        ]);   
    }
}
