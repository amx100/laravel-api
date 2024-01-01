<?php

namespace Database\Factories;

use App\Models\Drug;
use Illuminate\Database\Eloquent\Factories\Factory;

class DrugFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NAME' => $this->faker->word,
            'TYPE' => $this->faker->word,
            'DOSE' => $this->faker->word,
            'SELLING_PRICE' => $this->faker->randomFloat(2, 1, 100),
            'EXPIRATION_DATE' => $this->faker->date,
            'QUANTITY' => $this->faker->randomNumber,
        ];
    }
}

