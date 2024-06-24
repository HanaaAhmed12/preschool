<?php
// database/factories/ChildFactory.php

namespace Database\Factories;

use App\Models\Child;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChildFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Child::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->date,
            'grade' => $this->faker->numberBetween(1, 12),
            'parents_id' => \App\Models\Parents::factory(),
            'class_id' => \App\Models\Classes::factory(),
        ];
    }
}
