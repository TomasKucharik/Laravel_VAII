<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PokedexFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->imageUrl(),
            'hp' => $this->faker->numberBetween(1, 10),
            'attack' => $this->faker->numberBetween(1, 10),
            'defense' => $this->faker->numberBetween(1, 10),
            //'speed' => $this->faker->numberBetween(0, 10),
            //'gender' => Str::random(5),

        ];
    }


}
