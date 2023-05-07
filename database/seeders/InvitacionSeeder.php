<?php

namespace Database\Seeders;

use App\Models\Invitacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Invitacion::create([
           'NombreI'=>'Boda maria y juan',
           'DescripcionI'=>'una maravillosa boda en los alapes ',
           'UbicacionI'=>'Se ubica en la calle francesa',
           'DuracionI'=>'20:00:00',
           'EstadoI'=>false,
           'fecha'=>'2021-08-10',
           'organizador_id'=>'1',
           'especialidad_id'=>'1',
           'estudio_fotografico_id'=>'1',        

        ]);
        Invitacion::create([
            'NombreI'=>'Boda carla y mateo',
            'DescripcionI'=>'una maravillosa boda en los alapes ',
            'UbicacionI'=>'Se ubica en la calle chiriguanao',
            'DuracionI'=>'20:00:00',
            'EstadoI'=>false,
            'fecha'=>'2021-08-10',
            'organizador_id'=>'1',
            'especialidad_id'=>'1',
            'estudio_fotografico_id'=>'1',        
 
         ]);
         Invitacion::create([
            'NombreI'=>'Boda maria y juan',
            'DescripcionI'=>'una maravillosa boda en los alapes ',
            'UbicacionI'=>'Se ubica en la calle francesa',
            'DuracionI'=>'20:00:00',
            'EstadoI'=>false,
            'fecha'=>'2021-08-10',
            'organizador_id'=>'1',
            'especialidad_id'=>'2',
            'estudio_fotografico_id'=>'1',        
 
         ]);
         Invitacion::create([
            'NombreI'=>'reeencuentro de promocion',
            'DescripcionI'=>'Bautizo pequeño con comida incluida ',
            'UbicacionI'=>'Se ubica en la calle chuquisaca',
            'DuracionI'=>'20:00:00',
            'EstadoI'=>false,
            'fecha'=>'2021-08-10',
            'organizador_id'=>'1',
            'especialidad_id'=>'2',
            'estudio_fotografico_id'=>'1',    
 
         ]);
         Invitacion::create([
            'NombreI'=>'Bautizo de niña',
            'DescripcionI'=>'Bautizo pequeño con comida incluida ',
            'UbicacionI'=>'Se ubica en la calle chuquisaca',
            'DuracionI'=>'20:00:00',
            'EstadoI'=>false,
            'fecha'=>'2021-08-10',
            'organizador_id'=>'1',
            'especialidad_id'=>'2',
            'estudio_fotografico_id'=>'1',    
 
         ]);
         Invitacion::create([
            'NombreI'=>'Bautizo de mi sobrino  ',
            'DescripcionI'=>'Bautizo pequeño con comida incluida ',
            'UbicacionI'=>'Se ubica en la calle chuquisaca',
            'DuracionI'=>'20:00:00',
            'EstadoI'=>false,
            'fecha'=>'2021-08-10',
            'organizador_id'=>'1',
            'especialidad_id'=>'3',
            'estudio_fotografico_id'=>'1',    
 
         ]);
    }
}
