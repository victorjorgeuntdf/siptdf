<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Sin Datos',
            'email'     => 'sd@gmail.com',
            'password'  => bcrypt('123456789')
        ]);
        User::create([
            'name'      => 'Quispe Víctor Jorge José',
            'email'     => 'victorjorgeuntdf@gmail.com',
            'password'  => bcrypt('maria2022')
        ]);
        //User::factory(98)->create();
    }
}
