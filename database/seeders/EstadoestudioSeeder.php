<?php

namespace Database\Seeders;

use App\Models\Estadoestudio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoestudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estadoestudio::create([
            'descripcion' => 'Sin Datos'
        ]);
        Estadoestudio::create([
            'descripcion' => 'En Curso'
        ]);
        Estadoestudio::create([
            'descripcion' => 'Finalizado'
        ]);
        Estadoestudio::create([
            'descripcion' => 'Abandonó'
        ]);
    }
}
