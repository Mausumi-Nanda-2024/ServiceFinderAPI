<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\ServiceProvider;
use App\Models\ServiceRequest;
use App\Models\Tag;
use App\Http\Controllers\Api\V1\ServiceProviderController;


Route::apiResource('service-providers' , ServiceProviderController::class);

// Fetch all users
Route::get('/users', function () {
    return response()->json(User::all());
});


// Fetch all service requests
Route::get('/service-requests', function () {
    return response()->json(ServiceRequest::all());
});

// Fetch all tags
Route::get('/tags', function () {
    return response()->json(Tag::all());
});
