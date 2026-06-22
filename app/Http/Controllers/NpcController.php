<?php

namespace App\Http\Controllers;

use App\Models\Race;
use App\Models\FirstName;
use App\Models\LastName;
use App\Models\PTrait;
use App\Models\Ideal;
use App\Models\Bond;
use App\Models\Flaw;

class NpcController extends Controller
{
    public function generate()
    {
        // Sorteia traço de personalidade
        $trait = PTrait::inRandomOrder()->first();
        $ideal = Ideal::inRandomOrder()->first();
        $bond = Bond::inRandomOrder()->first();
        $flaw = Flaw::inRandomOrder()->first();

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

        $hasLastName = random_int(1, 100) <= 80; // 80% de chance

        $fullName = $firstName->name;

        if ($lastName && $hasLastName) {
            $fullName .= ' ' . $lastName->name;
        }
        return response()->json([
            'npc' => [
                'name' => $fullName,
                'race' => $race->name,
                'gender' => $gender,
                'personality' => [
                    'trait' => $trait->description,
                    'ideal' => [
                        'ideal' => $ideal->ideal,
                        'description' => $ideal->description
                    ],
                    'bond' => $bond->description,
                    'flaw' => $flaw->description
                ]
            ]
        ]);
    }
}