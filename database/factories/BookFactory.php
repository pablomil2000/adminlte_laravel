<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word(),
            'description'=>$this->faker->text(),
            'pages'=>$this->faker->randomNumber(),
            'price' => $this->faker->randomFloat(2,5,100)
        ];
    }
}
