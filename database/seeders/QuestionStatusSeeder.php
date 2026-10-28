<?php

namespace Database\Seeders;

use App\Models\QuestionStatus;
use App\Enums\QuestionStatus as QuestionStatusEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuestionStatus::insert([
            ['name' => QuestionStatusEnum::INPROGRESS],
            ['name' => QuestionStatusEnum::FINISHED],
            ['name' => QuestionStatusEnum::SCHEDULED],
        ]);
    }
}
