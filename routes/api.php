<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryApiController;
use App\Http\Controllers\ChapterApiController;
use App\Http\Controllers\ChoiceApiController;


Route::prefix('api/v1/')->group(function () {
  Route::get('/story', [StoryApiController::class, 'show']);
    Route::put('/story', [StoryApiController::class, 'update']);
    Route::delete('/story', [StoryApiController::class, 'destroy']);
    Route::post('/story', [StoryApiController::class, 'store']);

    Route::apiResource('story.chapters', ChapterApiController::class);
    
    Route::apiResource('chapters.choices', ChoiceApiController::class);
});