<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create([ 
            'nombre'        => 'Sin Datos',
            'paise_id'      => 1,
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Provincia::create([ 
            'nombre'        => 'Tierra del Fuego',
            'paise_id'      => 2,
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);

    }
}
