<?php

use App\Http\Controllers\api\studentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('student', [studentController::class, 'index']);

Route::post('student', [studentController::class, 'store']);
Route::get('student/{id}', [studentController::class, 'show']);
Route::get('student/{id}/edit', [studentController::class, 'edit']);
Route::put('student/{id}/edit', [studentController::class, 'update']);
Route::delete('student/{id}/delete', [studentController::class, 'destroy']);

