<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Year>
 */
class YearFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word . ' Year',
            'done' => $this->faker->boolean,
            'start_date' => $this->faker->dateTimeBetween('-10 years', '-1 year')->format('Y-m-d'),
            'end_date' => $this->faker->dateTimeBetween('now', '+10 years')->format('Y-m-d'),
            'teacher_id' => $this->faker->numberBetween(1, 100), // Adjust range to your `users` table IDs
        ];
    }
}
