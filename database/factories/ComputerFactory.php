<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "computer_brand" => fake()->unique()->word(),
            "computer_model" => fake()->unique()->word(),
            "computer_price" => fake()->randomFloat(10000, 1000000),
            "computer_ram_size" => fake()->numberBetween(2, 128),
            "computer_is_laptop" => fake()->boolean(),
            "computer_barcode" => fake()->unique()->uuid(),
            "fk_category_computer" => fake()->numberBetween(2, 10),
        ];
    }
}
