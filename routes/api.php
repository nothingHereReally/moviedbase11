<?php

use App\Http\Controllers\Api\ActorController;
use App\Http\Controllers\Api\DirectorController;
use App\Http\Controllers\Api\MovieController;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function(){
    Route::get('movies', [MovieController::class, 'index']);
    Route::get('movies/{id}', [MovieController::class, 'show']);
    Route::get('movies/genres/{genre}', [MovieController::class, 'showByGenre']);
    Route::get('movies/rates/{rate}', [MovieController::class, 'showByRate']);

    Route::get('actors/{id}', [ActorController::class, 'show']);
    Route::get('directors/{id}', [DirectorController::class, 'show']);

    Route::post('user/logout', [UserController::class, 'logout']);
});

Route::group(['prefix' => 'user'], function(){
    Route::post('register', [UserController::class, 'register']);
    Route::post('login', [UserController::class, 'login']);
});
