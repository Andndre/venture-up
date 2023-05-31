<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\NewsModelController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [AuthenticateController::class, 'index']);

Route::post('/login', [AuthenticateController::class, 'login']);

Route::post('/register', [AuthenticateController::class, 'register']);

Route::prefix('/news')->group(function () {
    Route::get('/', [NewsModelController::class, 'index']);
    Route::post('/post', [NewsModelController::class, 'store']);
});
