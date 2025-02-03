<?php

use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('movie', MovieController::class);

// Route::get('/hello', function (Request $request) {
//     return "hello from api";
// });
