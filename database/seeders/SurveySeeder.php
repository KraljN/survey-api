<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Survey;
use App\Models\SurveyAssignment;
use App\Models\User;
use Database\Factories\SurveyAssignmentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Survey::factory()->count(3)->has(Question::factory()->count(5))->create();


        Survey::factory()
            ->hasAttached(User::inRandomOrder()->limit(3)->get(), SurveyAssignmentFactory::new()->completed()->raw())->create();
    }
}
