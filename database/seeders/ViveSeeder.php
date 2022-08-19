<?php

namespace Database\Seeders;

use App\Models\Vive;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vive::create([
            'detalle' => 'Sin Datos'
        ]);
        Vive::create([
            'detalle' => 'Si'
        ]);
        Vive::create([
            'detalle' => 'No'
        ]);
    }
}
