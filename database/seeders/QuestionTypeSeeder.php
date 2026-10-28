<?php

namespace Database\Seeders;

use App\Models\QuestionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Enums\QuestionType as QuestionTypeEnum;
class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuestionType::insert([
            ['name' => QuestionTypeEnum::TEXT],
            ['name' => QuestionTypeEnum::SINGLE_CHOICE],
            ['name' => QuestionTypeEnum::MULTIPLE_CHOICE],
            ['name' => QuestionTypeEnum::RATING],
        ]);
    }
}
