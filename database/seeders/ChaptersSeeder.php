<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Story;
use App\Models\Chapter;
use Illuminate\Database\Seeder;

class ChaptersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $story = Story::first();

        Chapter::create([
            'title' => 'Chapter 1: Awakening',
            'chapter_number' => 1,
            'chapter_content' => 'In the beginning, there was darkness...',
            'story_id' => $story->id,
        ]);

        Chapter::create([
            'title' => 'Chapter 2: The Journey Begins',
            'chapter_number' => 2,
            'chapter_content' => 'The sun rose over the horizon...',
            'story_id' => $story->id,
        ]);
    }
}
