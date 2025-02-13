<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\ServiceProvider;
use App\Models\ServiceRequest;
use App\Models\Tag;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Fetch all users
Route::get('/users', function () {
    return response()->json(User::all());
});

// Fetch all service providers
Route::get('/service-providers', function () {
    return response()->json(ServiceProvider::all());
});

// Fetch all service requests
Route::get('/service-requests', function () {
    return response()->json(ServiceRequest::all());
});

// Fetch all tags
Route::get('/tags', function () {
    return response()->json(Tag::all());
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
