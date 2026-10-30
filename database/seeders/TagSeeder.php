<?php

namespace Database\Seeders;

use App\Models\Survey;
use App\Models\Tag;
use Database\Factories\TagFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory()->count(10)->create();

        Survey::all()->each(function (Survey $survey) use ($tags){
            $randomTags = $tags->random(rand(1,3))->pluck('id');
            $survey->tags()->attach($randomTags);
        });
    }
}
