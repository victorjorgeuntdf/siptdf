<?php

namespace Database\Seeders;

use App\Models\Estadoscivile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadocivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estadoscivile::create([
            'nombre'        => 'Sin Datos', 
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Estadoscivile::create([
            'nombre'        => 'Soltera/o', 
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Estadoscivile::create([
            'nombre'        => 'Casada/o', 
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Estadoscivile::create([
            'nombre'        => 'Divorciada/o', 
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
        Estadoscivile::create([
            'nombre'        => 'Viuda/o', 
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);
    }
}
