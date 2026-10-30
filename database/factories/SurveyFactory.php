<?php

namespace Database\Factories;

use App\Models\QuestionStatus;
use App\Models\Status;
use App\Models\Survey;
use App\Models\User;
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
        static $questionStatusIds;
        $questionStatusIds ??= QuestionStatus::all()->pluck('id');

        return [
            'title' => fake()->sentence(),
            'email' => fake()->safeEmail(),
            'question_status_id' => fake()->randomElement($questionStatusIds),
            'created_by' => User::inRandomOrder()->first()?->id ?? User::factory()
        ];
    }
}
