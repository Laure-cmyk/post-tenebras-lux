<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryApiController;
use App\Http\Controllers\ChapterApiController;
use App\Http\Controllers\ChoiceApiController;

// Route::prefix handles the prefix for all routes in the group
// Route::group handles the grouping of routes

// Routes for stories
Route::prefix('api/v1/')->group(function () {
    Route::get('/stories', [StoryApiController::class, 'show']);
    Route::get('/stories/{id}', [StoryApiController::class, 'getStory']);
    Route::put('/stories', [StoryApiController::class, 'update']);
    Route::delete('/stories', [StoryApiController::class, 'destroy']);
    Route::post('/stories', [StoryApiController::class, 'store']);

    // Routes for chapters
    Route::prefix('stories/{story}')->group(function () {
      Route::get('/chapters', [ChapterApiController::class, 'show']);
      Route::get('/chapters/{id}', [ChapterApiController::class, 'getChapter']);
      Route::put('/chapters', [ChapterApiController::class, 'update']);
      Route::delete('/chapters', [ChapterApiController::class, 'destroy']);
      Route::post('/chapters', [ChapterApiController::class, 'store']);
  });
    });