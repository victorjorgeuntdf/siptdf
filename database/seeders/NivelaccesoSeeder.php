<?php

namespace Database\Seeders;

use App\Models\Nivelacceso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelaccesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nivelacceso::create([ 
            'nombre'        => 'Dios',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Nivelacceso::create([ 
            'nombre'        => 'Administrador',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Nivelacceso::create([ 
            'nombre'        => 'Carga Primaria',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Nivelacceso::create([ 
            'nombre'        => 'Carga Secundaria',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Nivelacceso::create([ 
            'nombre'        => 'Carga Terciaria',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Nivelacceso::create([ 
            'nombre'        => 'Visualizador',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Nivelacceso::create([ 
            'nombre'        => 'Sin Acceso',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
    }
}
