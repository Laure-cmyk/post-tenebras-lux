<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Choice;

class ChoiceApiController extends Controller
{

    public function getChoices($chapterId)
    {
        // implement use
        /* return response()->json(Choice::all()); */
        return response()->json(Choice::where('chapter_id', $chapterId)->get());
    }
}
