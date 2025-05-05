<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Story;
use Illuminate\Database\Seeder;

class StoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Story::create([
            'title' => 'Post Tenebras Lux',
            'summary' => 'A tale of adventure in a mystical world where the GREEDY EVIL FORCES have taken over. Embark on a journey to save the world from the clutches of evil!',
            'author_name' => 'Laure Mangold',
        ]);
    }
}
