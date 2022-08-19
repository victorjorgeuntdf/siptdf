<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);   
        $this->call(MacSeeder::class);
        $this->call(RegestadoSeeder::class); 
        $this->call(SexobioSeeder::class);
        $this->call(ViveSeeder::class);
        $this->call(NivelaccesoSeeder::class);
        
        $this->call(ExpresiongeneroSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(CiudadSeeder::class);        
        $this->call(EstadocivilSeeder::class);
        $this->call(GruposanguineoSeeder::class);
        $this->call(LenteSeeder::class);
        $this->call(LateralidadSeeder::class); 
        $this->call(UsoarmasfuegoSeeder::class);
        $this->call(PersonaSeeder::class);

        $this->call(EstadoestudioSeeder::class);

        $this->call(TiposidentificacionSeeder::class);
        $this->call(EnteSeeder::class);
        $this->call(PersidentificacionSeeder::class);

    }
}
