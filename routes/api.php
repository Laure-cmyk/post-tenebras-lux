<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ChapterApiController;
use App\Http\Controllers\ChoiceApiController;


Route::prefix('api/v1/')->group(function () {
  Route::get('/story', [StoryController::class, 'show']);
    Route::put('/story', [StoryController::class, 'update']);
    Route::delete('/story', [StoryController::class, 'destroy']);
    Route::post('/story', [StoryController::class, 'store']);

    Route::apiResource('story/chapters', ChapterApiController::class);
    
    Route::apiResource('chapters.choices', ChoiceApiController::class);
});