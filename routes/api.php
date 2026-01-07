<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Public Product Routes
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

// Protected Product Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/products', [ProductController::class, 'store']);
    Route::post('/products/{id}', [ProductController::class, 'update']); // Using POST for updates with file upload
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
});

// Temporary Route to Get a Token (Development Only)
Route::get('/get-token', function () {
    $user = \App\Models\User::first(); // Gets the first user (likely admin)
    if (!$user) {
        return response()->json(['error' => 'No users found'], 404);
    }
    $token = $user->createToken('development-token')->plainTextToken;
    return response()->json([
        'user' => $user->email,
        'token' => $token,
        'message' => 'Copy this token for use in Postman Authorization header'
    ]);
});
