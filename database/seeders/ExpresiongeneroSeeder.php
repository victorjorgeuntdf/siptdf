<?php

namespace Database\Seeders;

use App\Models\Expresiongenero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpresiongeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expresiongenero::create([
            'nombre'        => 'Sin Datos',
            'descripcion'   => ' ',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
        Expresiongenero::create([
            'nombre'        => 'Masculino',
            'descripcion'   => 'Se puede definir o encontrar dentro de los dos géneros binarios',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
        Expresiongenero::create([
            'nombre'        => 'Femenino',
            'descripcion'   => 'Se puede definir o encontrar dentro de los dos géneros binarios',
            'mac_id'        => 2,
            'user_id'       => 2,
            'regEstado_id'  => 2
        ]);    
    }
}
