<?php

namespace Database\Seeders;

use App\Models\Tiposidentificacione;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposidentificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tiposidentificacione::create([ 
            'nombre'        => 'Sin Datos',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Tiposidentificacione::create([ 
            'nombre'        => 'D.N.I.',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Tiposidentificacione::create([ 
            'nombre'        => 'PASAPORTE',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Tiposidentificacione::create([ 
            'nombre'        => 'L.E.',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Tiposidentificacione::create([ 
            'nombre'        => 'L.C.',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
    }
}
