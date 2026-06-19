<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

Route::get('/random-name', [NameController::class, 'random']);