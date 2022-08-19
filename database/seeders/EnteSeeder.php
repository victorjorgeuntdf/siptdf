<?php

namespace Database\Seeders;

use App\Models\Ente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ente::create([
            'nombre'        => 'Sin Datos',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Ente::create([
            'nombre'        => 'Registro Nacional de las Personas',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
    }
}
