<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\Survey;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Survey>
 */
class SurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $statusIds;
        $statusIds ??= Status::all()->pluck('id');

        return [
            'title' => fake()->sentence(),
            'email' => fake()->safeEmail(),
            'status_id' => fake()->randomElement($statusIds)
        ];
    }
}
