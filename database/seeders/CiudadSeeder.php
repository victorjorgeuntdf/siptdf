<?php

namespace Database\Seeders;

use App\Models\Ciudade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudade::create([ 
            'nombre'        => 'Sin Datos',
            'cp'            => ' ',
            'provincia_id'  => 1,
            'paise_id'      => 1,
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);

        Ciudade::create([ 
            'nombre'        => 'Ushuaia',
            'cp'            => '9410',
            'provincia_id'  => 2,
            'paise_id'      => 2,
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);

        Ciudade::create([ 
            'nombre'        => 'Tolhuin',
            'cp'            => '9412',
            'provincia_id'  => 2,
            'paise_id'      => 2,
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);

        Ciudade::create([ 
            'nombre'        => 'Rio Grande',
            'cp'            => 'V9420',
            'provincia_id'  => 2,
            'paise_id'      => 2,
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);

    }
}
