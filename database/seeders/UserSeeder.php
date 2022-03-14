<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'name' => 'Perico',
                'surname' => 'Los Palotes',
                'address' => 'Larga 24',
                'city' => 'Cuevas Almanzora',
                'age' => '22',
                'phone' => '666666666',
                'club' => 'picados',
                'federado' => '1',
                'empresa' => 'organizacion',
                'email' => 'perico@dominio.com',
                'password' => bcrypt('12345678'),
                'categoria_asistente_id' => '1'
            ],

            [
                'name' => 'Juan',
                'surname' => 'Palomo',
                'address' => 'Ancha 24',
                'city' => 'vera',
                'age' => '30',
                'phone' => '666666446',
                'club' => 'verarunning',
                'federado' => '2',
                'empresa' => 'corredor',
                'email' => 'juan@dominio.com',
                'password' => bcrypt('12345678'),
                'categoria_asistente_id' => '2'
            ],

            [
                'name' => 'Manolo',
                'surname' => 'Bombo',
                'address' => 'Via 44',
                'city' => 'Madrid',
                'age' => '45',
                'phone' => '666336666',
                'club' => 'futball',
                'federado' => '1',
                'empresa' => 'corredor',
                'email' => 'manolo@dominio.com',
                'password' => bcrypt('12345678'),
                'categoria_asistente_id' => '3'
            ],

            [
                'name' => 'Vicente',
                'surname' => 'Ruiz',
                'address' => 'leopoldo 45',
                'city' => 'Murcia',
                'age' => '25',
                'phone' => '66633664',
                'club' => 'indalo',
                'federado' => '1',
                'empresa' => 'corredor',
                'email' => 'vicente@dominio.com',
                'password' => bcrypt('12345678'),
                'categoria_asistente_id' => '4'
            ],

            [
                'name' => 'Francisco',
                'surname' => 'Ortega',
                'address' => 'mayor 2',
                'city' => 'Vitoria',
                'age' => '22',
                'phone' => '666336644',
                'club' => 'libre',
                'federado' => '1',
                'empresa' => 'organizacion',
                'email' => 'fran@dominio.com',
                'password' => bcrypt('12345678'),
                'categoria_asistente_id' => '5'
            ],

            [
                'name' => 'Pepe',
                'surname' => 'Catorce',
                'address' => 'rural 4',
                'city' => 'Huercal',
                'age' => '40',
                'phone' => '666336633',
                'club' => 'libre',
                'federado' => '1',
                'empresa' => 'corredor',
                'email' => 'pepe@dominio.com',
                'password' => bcrypt('12345678'),
                'categoria_asistente_id' => '6'
            ]
        ];



        foreach ($users as $user) {
            User::create($user);
        }
    }
}
