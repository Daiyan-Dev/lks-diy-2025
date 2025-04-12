<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GameController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//authentication
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


Route::get('/game', [GameController::class, 'game']);
Route::get('/game/search', [GameController::class, 'searchGames']);
Route::get('/game/{id}', [GameController::class, 'gameById']);
Route::get('/game/{id}/recommendations', [GameController::class, 'getRecommendations']);

Route::get('/categories', [GameController::class, 'categories']);

Route::post('/admin/auth', [AuthController::class, 'adminAuth']);

Route::post('/game', [GameController::class, 'gamePost']);

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/game/{id}/play', [GameController::class, 'playGame']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/game/{id}/score', [GameController::class, 'gameScore']);



