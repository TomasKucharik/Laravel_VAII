<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GamesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(10),
            'release' => $this->faker->numberBetween(1990,2022),
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->text(200),


        ];
    }


}
