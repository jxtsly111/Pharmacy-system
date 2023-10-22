<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'product_name' => $this->faker->word,
            'quantity' => $this->faker->numberBetween(1, 100),
            'tax' => $this->faker->randomFloat(2, 0, 50),
            'discount' => $this->faker->randomFloat(2, 0, 50),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'status' => $this->faker->randomElement(['Available', 'Out of Stock', 'Discontinued']),
            'image' => $this->faker->image('public/storage/products', 400, 300, null, false),
            'description' => $this->faker->sentence,

        ];
    }
}
