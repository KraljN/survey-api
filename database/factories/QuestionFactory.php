<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\QuestionType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'text' => fake()->text(100),
            'is_required' => fake()->boolean(),
            'question_type_id' => QuestionType::inRandomOrder()->first()?->id
        ];
    }
}
