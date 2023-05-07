<?php

namespace Database\Seeders;

use App\Models\Suscripciones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Suscripciones::create([
            'NombreS'=>'Plan Basico ',
            'DescripcionS'=>'Empieza tu negocio, con las herramientas principales',
            'Numero_foto_portafolio'=>8,
            'Numero_evento'=>4,
            'PrecioS'=>9.99,
        ]);
        Suscripciones::create([
            'NombreS'=>'Plan Estandar',
            'DescripcionS'=>'Haz crecer tu negocio, Gestionando tus eventos y un mejor soporte',
            'Numero_foto_portafolio'=>30,
            'Numero_evento'=>10,
            'PrecioS'=>19.99,
        ]);
        Suscripciones::create([
            'NombreS'=>'Plan Premium',
            'DescripcionS'=>'Consolidate en el mercado, que tu trabajo no tenga limites',
            'Numero_foto_portafolio'=>100,
            'Numero_evento'=>0,
            'PrecioS'=>49.99,
        ]);
    }
}
