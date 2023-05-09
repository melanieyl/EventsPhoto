<?php

namespace Database\Seeders;

use App\Models\Organizador;
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
        $roleO = Role::create(['name' => 'Usuario']);      

        User::create([
            'name' => 'Sistema',
            'email' => 'Sistema@gmail.com',
            'password' => bcrypt('12345678'),
            
        ])->assignRole('Fotografo');

        User::create([
            'name' => 'Melanie Fotografa',
            'email' => 'melanieyupanqui@gmail.com',
            'password' => bcrypt('12345678'),
            
        ])->assignRole('Fotografo');
        User::create([
            'name' => 'Fotografo 1 juanito',
            'email' => 'fotografojuanito@gmail.com',
            'password' => bcrypt('1234'),
          
        ])->assignRole('Fotografo');

        User::create([
            'name' => 'Melanie Organizadora',
            'email' => 'melanieorganizadora@gmail.com',
            'password' => bcrypt('12345678'),
           
        ])->assignRole('Usuario');
        Organizador::create(
            [
                'user_id'=>'4'
            ]
            );

        User::create([
            'name' => 'Melanie Fotografa',
            'email' => 'melanieinvitada@gmail.com',
            'password' => bcrypt('12345678'),            
          
             ])->assignRole('Usuario');
    Organizador::create(

                [                    
                        'user_id'=>'5'
                  
                ]
                );
    }
}
