<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $eventos = [
            [
                'name' => 'Alpujarra magna',
                'fecha' => '2022-04-06',
                'descripcion' => 'Gran fondo Alpujarra Granadina 130km 3600m desnivel',
                'ciudad' => 'Lanjaron',
                'direccion' => 'gran via',
                'aforo' => '3000',
                'tipo' => 'marcha',
                'participantes' => '1500',
                'imagen' => ' ',
                'precio' => '50.00',
                'inscripcion_id' => 1,
                'categoria_evento_id' => 1

            ],

            [
                'name' => 'Indomable',
                'fecha' => '2022-03-05',
                'descripcion' => 'Gran fondo Sierra Almeria 160km 4000m desnivel',
                'ciudad' => 'Gergal',
                'direccion' => 'principal',
                'aforo' => '3000',
                'tipo' => 'marcha',
                'participantes' => '1500',
                'imagen' => ' ',
                'precio' => '50.00',
                'inscripcion_id' => 2,
                'categoria_evento_id' => 2

            ],

            [
                'name' => 'Mtb Huesca',
                'fecha' => '2022-08-01',
                'descripcion' => 'Mtb Huesca maraton 60km 2000m desnivel',
                'ciudad' => 'Hueca',
                'direccion' => 'plaza mayor',
                'aforo' => '1500',
                'tipo' => 'mtb',
                'participantes' => '800',
                'imagen' => ' ',
                'precio' => '50.00',
                'inscripcion_id' => 3,
                'categoria_evento_id' => 3

            ],

            [
                'name' => 'Popular Villar',
                'fecha' => '2022-07-07',
                'descripcion' => 'Poular 10k Villar de la Frontera',
                'ciudad' => 'Vilar',
                'direccion' => 'plaza del pueblo',
                'aforo' => '1500',
                'tipo' => 'runing',
                'participantes' => '500',
                'imagen' => ' ',
                'precio' => '50.00',
                'inscripcion_id' => 3,
                'categoria_evento_id' => 4

            ]
        ];

        foreach ($eventos as $evento) {
            Evento::create($evento);
        }
    }
}
