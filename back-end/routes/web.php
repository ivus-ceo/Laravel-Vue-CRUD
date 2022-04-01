<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api')->namespace('Api')->group(function() {
    Route::get('token', 'TokenController@index');
    Route::apiResource('users', 'UserController');
});

Route::fallback(function () {
    return response()->json(['status' => 404, 'message' => 'Not Found'], 404);
});