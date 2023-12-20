<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserUser>
 */
class UserUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'parent_id' => fake()->numberBetween(1,10),
            'relation' => fake()->randomElement(['Esposa', 'Esposo', 'Padre', 'Madre', 'Hijo', 'Hija']),
        ];
    }
}
