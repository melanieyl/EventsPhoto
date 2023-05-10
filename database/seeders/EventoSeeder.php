<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evento::create([
            'qr' => 'melanie',
            'invitacion_id' => 1,
        ]);
        Evento::create([
            'qr' => 'melanie',
            'invitacion_id' => 2,
        ]);
        Evento::create([
            'qr' => 'melanie',
            'invitacion_id' => 3,
        ]);
    }
}
