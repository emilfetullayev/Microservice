<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::get('/test', function () {
    return response()->json(['message' => 'Product Service işləyir!']);
});



Route::post('/register', [AuthController::class, 'register']);
