<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TesTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'test'=>$this->faker->city(),
            'created_at'=>$this->faker->date(),
            'updated_at'=>$this->faker->date()
        ];
    }
}
