<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DocumentType>
 */
class DocumentTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // public function definition(): array
    // {
    //     return [
    //         'id'=>1,
    //         'name'=> 'INE',
    //         'expiration'=>3,
    //         'code'=>time(),
    //     ];
    // }
    public function definition()
    {

        return[
            'name'=> $this->faker->name,
            'expiration' => random_int(1,20),//$this->faker->random_int,
            'code' => Str::uuid(),
        ];
    }
}
