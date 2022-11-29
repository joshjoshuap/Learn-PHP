<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'section' => fake()->numberBetween($min = 1, $max = 20),
            'age' => fake()->numberBetween($min = 1, $max = 100),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
