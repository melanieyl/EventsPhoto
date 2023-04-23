<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $roleF = Role::create(['name' => 'Fotografo']);
        $roleO = Role::create(['name' => 'Organizador']);
        $roleI = Role::create(['name' => 'Invitado']);
        User::create([
            'name' => 'Melanie Fotografa',
            'email' => 'melanieyupanqui@gmail.com',
            'password' => bcrypt('12345678'),
            'telefono' => '78565231',
        ])->assignRole('Fotografo');

        User::create([
            'name' => 'Melanie Organizadora',
            'email' => 'melanieorganizadora@gmail.com',
            'password' => bcrypt('12345678'),
            'telefono' => '78565231',
        ])->assignRole('Organizador');

        User::create([
            'name' => 'Melanie Fotografa',
            'email' => 'melanieinvitada@gmail.com',
            'password' => bcrypt('12345678'),            
            'telefono' => '78565231',
             ])->assignRole('Invitado');
    }
}
