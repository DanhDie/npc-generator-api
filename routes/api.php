<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;
use App\Http\Controllers\NpcController;

Route::get('/random-name', [NameController::class, 'random'])->middleware('auth:sanctum');
Route::get('/npc/generate', [NpcController::class, 'generate'])->middleware('auth:sanctum');