<?php

namespace Database\Factories;

use App\Models\Tutoring;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tutoring>
 */
class TutoringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_name' => $this->faker->name(),
            'station_number' => 'Station ' . $this->faker->numberBetween(1, 20),
            'topic' => $this->faker->randomElement(['HTML/CSS', 'JavaScript/React', 'PHP/Laravel', 'Git/CLI']),
            'issue_summary' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['Pending', 'Resolved']),
        ];
    }
}
