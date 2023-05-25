<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\NewsModelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('/user', [AuthenticateController::class, 'index']);

Route::post('/login', [AuthenticateController::class, 'login']);

Route::post('/register', [AuthenticateController::class, 'register']);

Route::prefix('/news')->group(function () {
    Route::get('/', [NewsModelController::class, 'index']);
    Route::post('/post', [NewsModelController::class, 'store']);
});
