<?php

namespace Database\Seeders;

use App\Models\Lateralidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LateralidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lateralidade::create([
            'descripcion'   => 'Sin Datos',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    

        Lateralidade::create([
            'descripcion'   => 'Diestro',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    

        Lateralidade::create([
            'descripcion'   => 'Zurdo',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
    }
}
