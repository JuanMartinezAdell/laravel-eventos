<?php

namespace Database\Seeders;

use App\Models\Inscripcion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Include_;

class InscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $asistentes = [
            [
                'asistente' => 'Perico los Palotes',
                'entradas' => 1,
                'estado' => '1',
                'user_id' => 1
            ],
            [
                'asistente' => 'Juan Palomo',
                'entradas' => 2,
                'estado' => '1',
                'user_id' => 2
            ],
            [
                'asistente' => 'Manolo Bombo',
                'entradas' => 1,
                'estado' => '2',
                'user_id' => 3
            ]
        ];

        foreach ($asistentes as $asistente) {
            Inscripcion::create($asistente);
        }
    }
}
