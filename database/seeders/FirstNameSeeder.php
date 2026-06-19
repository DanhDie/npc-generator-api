<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FirstName;
use App\Models\Race;

class FirstNameSeeder extends Seeder
{
    public function run(): void
    {
        $humano    = Race::where('name', 'Humano')->first();
        $elfo      = Race::where('name', 'Elfo')->first();
        $anao      = Race::where('name', 'Anão')->first();
        $meioOrc   = Race::where('name', 'Meio-Orc')->first();
        $meioElfo  = Race::where('name', 'Meio-Elfo')->first();
        $gnomo     = Race::where('name', 'Gnomo')->first();
        $halfling  = Race::where('name', 'Halfling')->first();
        $draconato = Race::where('name', 'Draconato')->first();
        $bugbear   = Race::where('name', 'Bugbear')->first();
        $goblin    = Race::where('name', 'Goblin')->first();
        $tiefling  = Race::where('name', 'Tiefling')->first();

        FirstName::create([
            'name' => 'Marcus',
            'gender' => 'M',
            'race_id' => $humano->id
        ]);

        FirstName::create([
            'name' => 'Julia',
            'gender' => 'F',
            'race_id' => $humano->id
        ]);

        FirstName::create([
            'name' => 'Aelar',
            'gender' => 'M',
            'race_id' => $elfo->id
        ]);

        FirstName::create([
            'name' => 'Lythia',
            'gender' => 'F',
            'race_id' => $elfo->id
        ]);

        FirstName::create([
            'name' => 'Thorin',
            'gender' => 'M',
            'race_id' => $anao->id
        ]);

        FirstName::create([
            'name' => 'Helga',
            'gender' => 'F',
            'race_id' => $anao->id
        ]);

        FirstName::create([
            'name' => 'Holgar',
            'gender' => 'M',
            'race_id' => $meioOrc->id
        ]);

        FirstName::create([
            'name' => 'Vola',
            'gender' => 'F',
            'race_id' => $meioOrc->id
        ]);

        FirstName::create([
            'name' => 'Poesia',
            'gender' => 'A',
            'race_id' => $tiefling->id
        ]);

        FirstName::create([
            'name' => 'Ternura',
            'gender' => 'A',
            'race_id' => $tiefling->id
        ]);

        FirstName::create([
            'name' => 'Desespero',
            'gender' => 'A',
            'race_id' => $tiefling->id
        ]);

        // --- Meio-Elfo ---
        FirstName::create([
            'name' => 'Tanis',
            'gender' => 'M',
            'race_id' => $meioElfo->id
        ]);
        FirstName::create([
            'name' => 'Arwen',
            'gender' => 'F',
            'race_id' => $meioElfo->id
        ]);

        // --- Gnomo ---
        FirstName::create([
            'name' => 'Fizzlebang',
            'gender' => 'M',
            'race_id' => $gnomo->id
        ]);
        FirstName::create([
            'name' => 'Nissa',
            'gender' => 'F',
            'race_id' => $gnomo->id
        ]);

        // --- Halfling ---
        FirstName::create([
            'name' => 'Bilbo',
            'gender' => 'M',
            'race_id' => $halfling->id
        ]);
        FirstName::create([
            'name' => 'Rosie',
            'gender' => 'F',
            'race_id' => $halfling->id
        ]);

        // --- Draconato ---
        FirstName::create([
            'name' => 'Torinn',
            'gender' => 'M',
            'race_id' => $draconato->id
        ]);
        FirstName::create([
            'name' => 'Kava',
            'gender' => 'F',
            'race_id' => $draconato->id
        ]);

        // --- Bugbear ---
        FirstName::create([
            'name' => 'Karg',
            'gender' => 'M',
            'race_id' => $bugbear->id
        ]);
        FirstName::create([
            'name' => 'Gora',
            'gender' => 'F',
            'race_id' => $bugbear->id
        ]);

        // --- Goblin ---
        FirstName::create([
            'name' => 'Snikrot',
            'gender' => 'M',
            'race_id' => $goblin->id
        ]);
        FirstName::create([
            'name' => 'Riz',
            'gender' => 'F',
            'race_id' => $goblin->id
        ]);

        // --- Tiefling ---
        FirstName::create([
            'name' => 'Melek',
            'gender' => 'M',
            'race_id' => $tiefling->id
        ]);
        FirstName::create([
            'name' => 'Kallista',
            'gender' => 'F',
            'race_id' => $tiefling->id
        ]);
        
    }
}