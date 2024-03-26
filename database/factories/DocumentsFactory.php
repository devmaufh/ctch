<?php

namespace Database\Factories;

use App\Models\documents;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\documents>
 */
class DocumentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            //
            'id' => random_int(1,500),
            'student_id' => random_int(1,200),
            'document_type_id' => random_int(1,100),
            'Creation_date' => date_create(),
            'path' => $this->faker->randomElement(['Pdf','Jpg','png'])

        ];
    }
}
