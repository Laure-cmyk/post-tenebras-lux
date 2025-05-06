<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Choice;
use App\Models\Chapter;
use Illuminate\Database\Seeder;

class ChoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // You can create choices here if you have a Choices model and a relationship with Chapters
        // Example:
        
        Choice::create([
            'choice_text' => 'Go left',
            'chapter_id' => 1,
        ]);

        Choice::create([
            'choice_text' => 'Go right',
            'chapter_id' => 1,
        ]);
        
    }
}
