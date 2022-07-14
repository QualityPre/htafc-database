<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstNameMale(),
            'surname' => 'Smith',
            'appearances' => $this->faker->numberBetween(1, 505),
            'goals' => $this->faker->numberBetween(1, 255),
            'position' => 'Midfield',
            'wikipedia_link' => $this->faker->url(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
