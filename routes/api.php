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

    Route::prefix('stories/{story}')->group(function () {
        Route::get('/chapters', [ChapterApiController::class, 'index']);
        Route::get('/chapters/{id}', [ChapterApiController::class, 'show']);
        Route::put('/chapters', [ChapterApiController::class, 'update']);
        Route::delete('/chapters', [ChapterApiController::class, 'destroy']);
        Route::post('/chapters', [ChapterApiController::class, 'store']);
    });

    Route::prefix('chapters/{chapter}')->group(function () {
        Route::get('/choices', [ChoiceApiController::class, 'getChoices']);
        Route::get('/choices/{id}', [ChoiceApiController::class, 'show']);
        Route::put('/choices', [ChoiceApiController::class, 'update']);
        Route::delete('/choices', [ChoiceApiController::class, 'destroy']);
        Route::post('/choices', [ChoiceApiController::class, 'store']);
    });

    
/*     Route::apiResource('stories.chapters', ChapterApiController::class);
    Route::apiResource('chapters.choices', ChoiceApiController::class); */

    // If fail, change chapters & choices routes to prefix + group 


});