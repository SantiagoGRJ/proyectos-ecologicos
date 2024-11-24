<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->word(),
            'description' => fake()->sentence(10),
            'funding_goal' => fake()->randomFloat(2),
            'duration' => fake()->numberBetween(120,200),
            'category' => fake()->randomElement(["energia_renovable","reciclaje","agricultura_sostenible","energia_solar","reforestacion"]),
        'user_id' => fake()->unique()->numberBetween(1,17),
            'status' => fake()->randomElement(['pendiente','aprobado','rechazado']),
        ];
    }
}
