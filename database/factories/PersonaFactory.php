<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Persona;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Persona::class;

    public function definition()
    {
        return [
            'nombre'            => $this->faker->firstName,
            'apellido'          => $this->faker->lastName,
            'sexobio_id'        => $this->faker->randomElement(['1', '2', '3']),
            'expresiongenero_id'=> $this->faker->randomElement(['1', '2', '3']),
            'estadoscivile_id'  => $this->faker->randomElement(['1', '2', '3','4','5']),
            'ciudadIdent_id'    => $this->faker->randomElement(['1', '2', '3','4']),
            'gruposanguineo_id' => $this->faker->randomElement(['1', '2', '3','4','5','6','7','8','9']),
            'lente_id'          => $this->faker->randomElement(['1', '2', '3']),
            'nacPais_id'        => $this->faker->randomElement(['1', '2']),
            'nacProv_id'        => $this->faker->randomElement(['1', '2']),
            'nacCiudad_id'      => $this->faker->randomElement(['1', '2', '3','4']),
            'lateralidade_id'   => $this->faker->randomElement(['1', '2', '3']),
            'usuarioIdentif_id' => 2,
            'usoarmasfuego_id'  => $this->faker->randomElement(['1', '2', '3']),
            'vive_id'           => 2,
            'mac_id'            => 2,
            'user_id'           => 2,
            'regEstado_id'      => 2
        ];
    }

}
