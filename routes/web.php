<?php

use App\Http\Controllers\RecommendationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recommendations/ui/{userId}', [RecommendationController::class, 'showRecommendationsUI']);
