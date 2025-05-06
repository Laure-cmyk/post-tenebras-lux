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
        /* return response()->json(ChapterController::findOrFail($id)); */
    }
}
