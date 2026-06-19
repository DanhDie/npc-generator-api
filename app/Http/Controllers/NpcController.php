<?php

namespace App\Http\Controllers;

use App\Models\Race;
use App\Models\FirstName;
use App\Models\LastName;

class NpcController extends Controller
{
    public function generate()
    {
        // Sorteia raça
        $race = Race::inRandomOrder()->first();

        // Sorteia gênero
        $gender = collect(['M', 'F'])->random();

        // Busca primeiro nome compatível
        $firstName = FirstName::where('race_id', $race->id)
            ->whereIn('gender', [$gender, 'A'])
            ->inRandomOrder()
            ->first();

        // Busca sobrenome compatível
        $lastName = LastName::where('race_id', $race->id)
            ->inRandomOrder()
            ->first();

        return response()->json([
            'npc' => [
                'name' => $firstName->name . ' ' . $lastName->name,
                'race' => $race->name,
                'gender' => $gender
            ]
        ]);
    }
}