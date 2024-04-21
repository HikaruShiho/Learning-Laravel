<?php

use App\Http\Controllers\Demo\DemoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/demo', [DemoController::class, 'index']);