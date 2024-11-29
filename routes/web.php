<?php

use App\Http\Controllers\RecommendationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

Route::get('/recommendations/{userId}', [RecommendationController::class, 'showRecommendationsUI']);
Route::get('/movie/{movieId}', [RecommendationController::class, 'index']);
