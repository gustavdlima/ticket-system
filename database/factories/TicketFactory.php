<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'setor' => fake()->word(),
            'nome' => fake()->name(),
            'email' => fake()->email(),
            'equipamento' => fake()->word(),
            'n_tombamento' => fake()->word(),
            'defeito' => fake()->sentence(),
            'status' => fake()->boolean(),
        ];
    }
}
