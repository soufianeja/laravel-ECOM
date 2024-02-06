<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
USE Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'title' => fake()->title(),
            'slug' => Str::slug(fake()->sentence()),
            'description' => fake()->paragraph(),
            'price' => fake()->numberBetween($min = 100, $max = 100),
            'old_price' => fake()->numberBetween($min = 100, $max = 100),
            'stock' => fake()->numberBetween($min = 0, $max = 100),
            'image' => fake()->imageUrl($width =640, $height = 480),
            'category_id' => fake()->numberBetween($min = 1, $max = 10)
        ];
    }
}
