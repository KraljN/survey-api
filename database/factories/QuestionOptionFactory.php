<?php

namespace Database\Factories;

use App\Enums\QuestionType;
use App\Models\Question;
use App\Models\QuestionOption;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<QuestionOption>
 */
class QuestionOptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'label' => fake()->words(4, true),
            'value' => fake()->words(4, true),
            'position' => fake()->numberBetween(1, 20),
            'question_id' => Question::inRandomOrder()->first()?->id
        ];
    }

    public function choice(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'question_id' => Question::whereHas('type', function ($query) {
                    $query->whereIn('name', [QuestionType::SINGLE_CHOICE, QuestionType::MULTIPLE_CHOICE]);
                })->inRandomOrder()->value('id')
            ];
        });

    }
}
