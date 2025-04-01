<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "category_name" => fake()->unique()->words(2),
            "category_number" => fake()->numberBetween(0, 9),
            "category_price" => fake()->randomFloat(3, 1000, 10000),
            "category_state" => fake()->boolean(),
        ];
    }
}
