<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterApiController extends Controller
{
    public function getChapters($storyId)
    {
        // implement use
        return response()->json(Chapter::all());

    }

    public function getChapter($id) {
        /* return response()->json(ChapterController::findOrFail($id)); */
    }
}
