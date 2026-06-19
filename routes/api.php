<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Name;

Route::get('/random-name', function () {

    $name = Name::inRandomOrder()->first();

    return response()->json([
        'name' => $name->name
    ]);

});