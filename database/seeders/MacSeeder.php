<?php

namespace Database\Seeders;

use App\Models\Mac;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mac::create([ 
            'mac'           => 'Sin Datos',
            'ipv4'          => 'Sin Datos',
            'ipv6'          => '',
            'equipo'        => 'Sin Datos',
            'descripcion'   => 'Sin Datos'
        ]);
        Mac::create([ 
            'mac'           => '30:9C:23:DD:8B:C7',
            'ipv4'          => '010.000.001.100',
            'ipv6'          => '',
            'equipo'        => 'ViktorPC',
            'descripcion'   => 'Equipo Desarrollador y Administrador'
        ]);
    }
}
