<?php

namespace Database\Seeders;

use App\Models\Paise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paise::create([ 
            'nombre'        => 'Sin Datos',
            'gentilicio'    => 'Sin Datos',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Paise::create([ 
            'nombre'        => 'Argentina',
            'gentilicio'    => 'argentino/a',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
    }
}
