<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio' => $this->faker->address(),
            'numero_exterior' =>  $this->faker->randomNumber(3, true),
            'colonia' =>   $this->faker->word(),
            'cp'=>   $this->faker->randomNumber(5, true),
            'ciudad' =>  $this->faker->city(),
            'fecha_nacimiento' => $this->faker->dateTimeBetween(2000-01-01, $endDate = 'now'),
        ];
    }
}
