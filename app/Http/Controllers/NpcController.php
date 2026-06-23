<?php

namespace App\Http\Controllers;

use App\Models\Race;
use App\Models\FirstName;
use App\Models\LastName;
use App\Models\PTrait;
use App\Models\Ideal;
use App\Models\Bond;
use App\Models\Flaw;
use App\Models\Npc;
use Illuminate\Http\Request;

class NpcController extends Controller
{
    public function generate(Request $request)
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

        
        $npc = Npc::create([
        'user_id'          => $request->user()->id,
        'name'             => $fullName,
        'race'             => $race->name,
        'gender'           => $gender,
        'trait'            => $trait->description,
        'ideal'            => $ideal->ideal,
        'ideal_description'=> $ideal->description,
        'bond'             => $bond->description,
        'flaw'             => $flaw->description,
        'strength'         => floor((random_int(1, 20)/2)-5),
        'dexterity'        => floor((random_int(1, 20)/2)-5),
        'constitution'     => floor((random_int(1, 20)/2)-5),
        'intelligence'     => floor((random_int(1, 20)/2)-5),
        'wisdom'           => floor((random_int(1, 20)/2)-5),
        'charisma'         => floor((random_int(1, 20)/2)-5),
    ]);

    return response()->json([
        'npc' => [
            'id'     => $npc->id,
            'name'   => $npc->name,
            'race'   => $npc->race,
            'gender' => $npc->gender,
            'trait'  => $npc->trait,
            'ideal'  => $npc->ideal,
            'ideal_description' => $npc->ideal_description,
            'bond'   => $npc->bond,
            'flaw'   => $npc->flaw,
        ],
        'stats' => [
            'strength'     => $npc->strength,
            'dexterity'    => $npc->dexterity,
            'constitution' => $npc->constitution,
            'intelligence' => $npc->intelligence,
            'wisdom'       => $npc->wisdom,
            'charisma'     => $npc->charisma,
        ]
    ], 201);
    }
}
