<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{

    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->sentence(12),
            'price' => fake()->randomNumber(2),
            'quantity' => fake()->numberBetween($q = 2, $q = 10),
            'image' => now(),
            'cat_id' => fake()->numberBetween($q = 1, $q = 2),
            'user_id' => fake()->numberBetween($q = 1, $q = 2),
        ];
    }
}
