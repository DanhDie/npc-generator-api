<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Race;

class RaceSeeder extends Seeder
{
    public function run(): void
    {
        $races = [
            'Humano',
            'Elfo',
            'Anão',
            'Meio-Orc',
            'Meio-Elfo',
            'Gnomo',
            'Halfling',
            'Draconato',
            'Bugbear',
            'Goblin',
            'Tiefling'

        ];

        foreach ($races as $race) {
            Race::create([
                'name' => $race
            ]);
        }
    }
}   