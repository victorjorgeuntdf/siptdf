<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\Tiposidentificacione;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            'nombre'            => 'Víctor Jorge José',
            'apellido'          => 'Quispe',
            'sexobio_id'        => 2,
            'expresiongenero_id'=> 2,
            'estadoscivile_id'  => 2,
            'ciudadIdent_id'    => 2,
            'gruposanguineo_id' => 2,
            'lente_id'          => 2,
            'nacPais_id'        => 2,
            'nacProv_id'        => 2,
            'nacCiudad_id'      => 2,
            'lateralidade_id'   => 2,
            'usuarioIdentif_id' => 2,
            'usoarmasfuego_id'  => 2,
            'vive_id'           => 2,
            'mac_id'            => 2,
            'user_id'           => 2,
            'regEstado_id'      => 2
        ]);

        Persona::create([
            'nombre'            => 'Cristian',
            'apellido'          => 'Retamar',
            'sexobio_id'        => 2,
            'expresiongenero_id'=> 2,
            'estadoscivile_id'  => 2,
            'ciudadIdent_id'    => 2,
            'gruposanguineo_id' => 2,
            'lente_id'          => 2,
            'nacPais_id'        => 2,
            'nacProv_id'        => 2,
            'nacCiudad_id'      => 2,
            'lateralidade_id'   => 2,
            'usuarioIdentif_id' => 2,
            'usoarmasfuego_id'  => 2,
            'vive_id'           => 2,
            'mac_id'            => 2,
            'user_id'           => 2,
            'regEstado_id'      => 2
        ]);

        //Persona::factory(500)->create();
        Persona::factory(10000)->create();
    }
}
