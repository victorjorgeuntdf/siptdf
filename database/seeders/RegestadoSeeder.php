<?php

namespace Database\Seeders;

use App\Models\Regestado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegestadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Regestado::create([
            'descripcion' => 'Sin Datos'
        ]);
        Regestado::create([
            'descripcion' => 'Activo'
        ]);

        Regestado::create([
            'descripcion' => 'Desactivado'
        ]);

        Regestado::create([
            'descripcion' => 'En Espera'
        ]);
    }
}
