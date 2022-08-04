<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FsiAssessmentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Get a JSON File listing all Users
Route::get('/users', [FsiAssessmentController::class, 'index']);

// Store a single data in the Database
Route::post('/users/create', [FsiAssessmentController::class, 'store']);

// Get a single user based on id
Route::get('/users/{id}', [FsiAssessmentController::class, 'show']);

// Update a single user based on id
Route::patch('/users/{id}', [FsiAssessmentController::class, 'update']);

// delete a single user based on id
Route::delete('/users/{id}', [FsiAssessmentController::class, 'destroy']);

