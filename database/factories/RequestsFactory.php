<?php

namespace Database\Factories;

use App\Models\Requests;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Requests>
 */
class RequestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_student'=> random_int(1,20),
            'status'=>random_int(1,20),
            'creation_date'=>now(),
            'id_process'=> random_int(1,20),
        ];
    }
}
