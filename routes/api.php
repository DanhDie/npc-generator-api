<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/npc', function (Request $request) {
    return response()->json([
        'message' => 'Hello World'
        ]);
})->middleware('auth:sanctum');
