<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'        => $this->faker->words(3, true),
            'price'       => $this->faker->numberBetween(1000, 100000),
            'quantity'    => $this->faker->numberBetween(0, 500),
            'content'     => $this->faker->paragraph(3),
            'category_id' => $this->faker->numberBetween(1, 5),
            'views'       => $this->faker->numberBetween(0, 10000),
            'is_active'   => $this->faker->boolean(80),
        ];
    }
}