<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(50),
            'Content' => fake()->paragraph(),
            'Luggage' => fake()->numberBetween(1,10),
            'Doors' => fake()->numberBetween(1,4),
            'Passengers' => fake()->numberBetween(1,5),
            'Price' => fake()->numberBetween(1,10),
            'Active' => fake()->boolean(),
            'image' => fake()->imageUrl(),
            'category_id'=>fake()->numberBetween(1,6)
        ];
    }
}
