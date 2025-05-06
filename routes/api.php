<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryApiController;
use App\Http\Controllers\ChapterApiController;
use App\Http\Controllers\ChoiceApiController;

// Route::prefix handles the prefix for all routes in the group
// Route::group handles the grouping of routes

Route::prefix('api/v1/')->group(function () {
  Route::get('/story', [StoryApiController::class, 'show']);
    Route::put('/story', [StoryApiController::class, 'update']);
    Route::delete('/story', [StoryApiController::class, 'destroy']);
    Route::post('/story', [StoryApiController::class, 'store']);

    // Route::apiResource handles the resourceful routes for the controller
    // By adding apiResource, you automatically get the standard RESTful routes
    // Using the . allows to define parent-child relationships
    Route::apiResource('story.chapters', ChapterApiController::class);
    Route::apiResource('chapters.choices', ChoiceApiController::class);
});