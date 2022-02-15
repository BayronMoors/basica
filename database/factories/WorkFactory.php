<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
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
            'image' => $this->faker->numberBetween(1, 8),
            'inSlider' => $this->faker->numberBetween(0,1),
            'client_id' => $this->faker->numberBetween(1,100)
        ];
    }
}
