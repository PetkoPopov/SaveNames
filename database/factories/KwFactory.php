<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KwFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kw'=> $this->faker->randomFloat(3, 0, 22),
            'date'=>$this->faker->date()
        ];
    }
}
