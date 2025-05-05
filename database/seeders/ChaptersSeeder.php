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
            'image_path' => 'path/to/image.jpg',
            'story_id' => $story->id,
        ]);
    }
}
