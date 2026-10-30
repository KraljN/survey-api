<?php

namespace Database\Factories;

use App\Models\SurveyAssignment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SurveyAssignment>
 */
class SurveyAssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $assignedAt = now()->subDays(rand(10, 30));
        return [
            'assigned_at' => $assignedAt,
            'due_date' => $assignedAt->copy()->addDays(32),
            'completed_at' => null
        ];
    }

    public function completed(): static
    {
        return $this->state(function(array $attributes){
            return [
                'completed_at' => fake()->dateTimeBetween($attributes['assigned_at'], $attributes['due_date'])
            ];
        });
    }

    public function overdue(): static
    {
        return $this->state(function(){
            return [
                'assigned_at' => now()->subDays(rand(10, 30)),
                'due_date' => now()->subDays(rand(1, 9)),
                'completed_at' => null
            ];
        });
    }


}
