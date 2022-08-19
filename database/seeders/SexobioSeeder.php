<?php

namespace Database\Seeders;

use App\Models\Sexobio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SexobioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sexobio::create([
            'nombre' => 'Sin Datos'
        ]);
        Sexobio::create([
            'nombre' => 'Masculino'
        ]);
        Sexobio::create([
            'nombre' => 'Femenino'
        ]);
    }
}
