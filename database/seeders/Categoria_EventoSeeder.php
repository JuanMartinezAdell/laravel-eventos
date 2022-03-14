<?php

namespace Database\Seeders;

use App\Models\categoriaAsistente;
use App\Models\categoriaEvento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Categoria_EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria_eventos = [
            [
                'servicio' => 'running'
            ],
            [
                'servicio' => 'mtb'
            ],
            [
                'servicio' => 'trail'
            ],
            [
                'servicio' => 'marcha'
            ]
        ];

        foreach ($categoria_eventos as $categoria_evento) {
            categoriaEvento::create($categoria_evento);
        }
    }
}
