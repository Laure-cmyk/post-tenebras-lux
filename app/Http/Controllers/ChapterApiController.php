<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterApiController extends Controller
{
    public function show($id)
    {
        return response()->json(Chapter::all()); 

    }
   

    public function getChapter($storyId,$id) {
       
        $chapter = Chapter::find($id);
        if ($chapter) {
            return response()->json(Chapter::with('choices')->find($id));
        } else {
            return response()->json(['error' => 'Chapter not found'], 404);
        }
    }
}
