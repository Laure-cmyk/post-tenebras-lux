<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class StoryApiController extends Controller
{

    public function show()
    {
        // implement use
        return response()->json(Story::all()); 
    }


    public function getStory($id)
    {
        $story = Story::find($id);
        if ($story) {
            return response()->json($story);
        } else {
            return response()->json(['error' => 'Story not found'], 404);
        }
    }
}