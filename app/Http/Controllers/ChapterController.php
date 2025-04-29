<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterController extends Controller
{
    public function index() {
        $chapters = Chapter::all();
        return response()->json($chapters);
    }
}
