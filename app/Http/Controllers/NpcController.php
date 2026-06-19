<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Name;
use App\Models\Race;

class NpcController extends Controller
{
    public function generate()
    {
        $name = Name::inRandomOrder()->first();
        $race = Race::inRandomOrder()->first();

        return response()->json([
            'npc' => [
                'name' => $name->name,
                'race' => $race->name
            ]
        ]);
    }
}