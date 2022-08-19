<?php

namespace Database\Seeders;

use App\Models\Persidentificacione;
use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class PersidentificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persidentificacione::create([ 
            'persona_id'                => 1,
            'tiposidentificacione_id'   => 2,
            'nroDocumento'              => '25662211',
            'ente_id'                   => 2,
            'ejemplar'                  => 'A',
            'mac_id'                    => 2,
            'user_id'                   => 2,
            'regEstado_id'              => 2
        ]);

        Persidentificacione::create([ 
            'persona_id'                => 1,
            'tiposidentificacione_id'   => 3,
            'nroDocumento'              => 'PSP1225233',
            'ente_id'                   => 2,
            'ejemplar'                  => 'B',
            'mac_id'                    => 2,
            'user_id'                   => 2,
            'regEstado_id'              => 2
        ]);

        $faker = Factory::create();
        $personas = Persona::Where('nombre','<>','Víctor Jorge José')->get();
        foreach ($personas as $persona) {

            Persidentificacione::create([ 
                'persona_id'                => $persona->id,
                'tiposidentificacione_id'   => $faker->randomElement(['2', '3', '4', '5']),
                'nroDocumento'              => $faker->numberBetween(30000000, 50000000),
                'ente_id'                   => 2,
                'ejemplar'                  => $faker->randomElement(['A', 'B', 'C', 'D']),
                'mac_id'                    => 2,
                'user_id'                   => 2,
                'regEstado_id'              => 2
            ]);    
        }
        //PersidentificacionFactory::factory(1)->create();
    }
}
