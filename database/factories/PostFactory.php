<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(7, true),
            'content' => $this->faker->text(500),
            'categorie_id' => $this->faker->numberBetween(1, 30)
        ];
    }
}
