<?php

namespace Database\Seeders;

use App\Models\Gruposanguineo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GruposanguineoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gruposanguineo::create([
            'nombre'        => 'Sin Datos',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
        Gruposanguineo::create([
            'nombre'        => 'A+',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
        Gruposanguineo::create([
            'nombre'        => 'A-',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
        Gruposanguineo::create([
            'nombre'        => 'B+',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
        Gruposanguineo::create([
            'nombre'        => 'B-',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
        Gruposanguineo::create([
            'nombre'        => 'AB+',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
        Gruposanguineo::create([
            'nombre'        => 'AB-',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
        Gruposanguineo::create([
            'nombre'        => 'O+',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
        Gruposanguineo::create([
            'nombre'        => 'O-',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
    }
}
