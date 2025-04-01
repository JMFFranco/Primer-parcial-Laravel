<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */

Route::apiResource("computers", ComputerController::class);
Route::apiResource("categories", CategoryController::class);


