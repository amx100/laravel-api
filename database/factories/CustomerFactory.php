<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'FIRST_NAME' => $this->faker->firstName,
            'LAST_NAME' => $this->faker->lastName,
            'DOB' => $this->faker->date,
        ];
    }
}

