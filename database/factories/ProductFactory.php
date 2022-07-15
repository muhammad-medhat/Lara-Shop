<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            // generate a product with a random name, description, price, and category
            
            
            'name' => $this->faker->unique()->word,
            // 'name' => $this->faker->name,
            'description' => $this->faker->text,
            'thumbnail' => $this->faker->imageUrl,
            'price' => $this->faker->randomFloat(2, 0, 100),
            // 'stock' => $this->faker->numberBetween(0, 100),
            // 'discount' => $this->faker->numberBetween(0, 100),
            'category_id' => $this->faker->numberBetween(1, 8),
        ];
    }
}
