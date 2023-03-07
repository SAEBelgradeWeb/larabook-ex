<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => substr(fake()->sentence(3, true), 0, -1),
            'description' => fake()->paragraph(),
            'author' => fake()->name(),
            'photo' => fake()->imageUrl(),
            'year' => fake()->year()
        ];
    }
}
