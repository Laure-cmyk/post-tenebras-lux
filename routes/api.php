<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryApiController;
use App\Http\Controllers\ChapterApiController;
use App\Http\Controllers\ChoiceApiController;

// Route::prefix handles the prefix for all routes in the group
// Route::group handles the grouping of routes

Route::prefix('api/v1/')->group(function () {
    Route::get('/stories', [StoryApiController::class, 'show']);
    Route::get('/stories/{id}', [StoryApiController::class, 'getStory']);
      Route::put('/stories', [StoryApiController::class, 'update']);
      Route::delete('/stories', [StoryApiController::class, 'destroy']);
      Route::post('/stories', [StoryApiController::class, 'store']);

    // Route::apiResource handles the resourceful routes for the controller
    // By adding apiResource, you automatically get the standard RESTful routes
    // Using the . allows to define parent-child relationships
    Route::apiResource('stories.chapters', ChapterApiController::class);
    Route::apiResource('chapters.choices', ChoiceApiController::class);

    // If fail, change chapters & choices routes to prefix + group 


});