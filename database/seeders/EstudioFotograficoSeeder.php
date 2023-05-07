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
            'DescripcionEF' => 'Este es un estudio Fotografico que organiza bodas y sbdhbhfnjkml,jhb nmkobh mkdfhvwh cad vbd vhbfv',
            'UbicacionEF' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'telefono' => '78565231',
            'user_id' => '1',
        ]);    
        EstudioFotografico::create([
            'NombreEF' => 'Estudio Fotografico Juanito',
            'DescripcionEF' => 'aaaaaaaassssssssssssssssssddddddd ddjjjkksssssss',
            'UbicacionEF' => 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeee',
            'telefono' => '78565231',
            'user_id' => '2',
        ]);   
    }
}
