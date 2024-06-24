<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\class>
 */
class ClassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>  $this->faker->randomElement(['Orange', 'Blue Sky', 'Baby Blue', 'Snow White', 'Sun Flower']),
            'children_count' => $this->faker->numberBetween(1,20),
        ];
    }
}
