<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterApiController extends Controller
{
    public function show($chapterId)
    {
        // implement use
        return response()->json(Chapter::with('choices')->find($chapterId));
    }
   

    public function getChapter($id) {
       
        $chapter = Chapter::find($id);
        if ($chapter) {
            return response()->json($chapter);
        } else {
            return response()->json(['error' => 'Chapter not found'], 404);
        }
    }
}
