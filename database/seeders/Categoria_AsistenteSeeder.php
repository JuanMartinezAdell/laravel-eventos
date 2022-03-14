<?php

namespace Database\Seeders;

use App\Models\categoriaAsistente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class Categoria_AsistenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria_asistentes = [
            [
                'categoria' => 'infantil'
            ],
            [
                'categoria' => 'junior'
            ],
            [
                'categoria' => 'promesa'
            ],
            [
                'categoria' => 'elite'
            ],
            [
                'categoria' => 'master'
            ],
            [
                'categoria' => 'veterano'
            ]

        ];

        foreach ($categoria_asistentes as $categoria_asistente) {
            categoriaAsistente::create($categoria_asistente);
        }
    }
}
