<?php

namespace Database\Seeders;

use App\Models\Usoarmasfuego;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsoarmasfuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usoarmasfuego::create([
            'descripcion'   => 'Sin Datos',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    

        Usoarmasfuego::create([
            'descripcion'   => 'Si',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    

        Usoarmasfuego::create([
            'descripcion'   => 'No',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
    }
}
