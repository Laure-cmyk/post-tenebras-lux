<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Choice;

class ChoiceApiController extends Controller
{

    public function getChoices($chapterId)
    {
        return response()->json(Choice::where('chapter_id', $chapterId)->get());
    }
}
