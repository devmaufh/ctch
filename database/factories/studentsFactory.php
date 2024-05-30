<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->lastname,
            'last name'=>$this->faker->lastname,
            'mother last name'=>$this->faker->lastname,
            'curp'=>Str::uuid(),

        ];
    }
}
