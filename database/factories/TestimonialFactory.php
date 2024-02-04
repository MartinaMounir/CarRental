<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => fake()->name(50),
            'Position' =>fake()->text(50),
            'Content' => fake()->text(150),
            'published' => fake()->boolean(),
            'image' => fake()->imageUrl(),
        ];
    }
}
