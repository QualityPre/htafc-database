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
            'name' => $this->faker->name('male'),
            'appearances' => $this->faker->numberBetween(1, 505),
            'goals' => $this->faker->numberBetween(1, 255),
            'position' => 'Midfield',
            'tags' => '2000-01,2001-02,2002-03',
            'wikipedia_link' => $this->faker->url(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
