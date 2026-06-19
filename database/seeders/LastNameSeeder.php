<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LastName;
use App\Models\Race;

class LastNameSeeder extends Seeder
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

       // --- Humano ---
        LastName::create([
            'name' => 'Valerius',
            'race_id' => $humano->id
        ]);
        LastName::create([
            'name' => 'Rivers',
            'race_id' => $humano->id
        ]);

        // --- Elfo ---
        LastName::create([
            'name' => 'Folha de Prata',
            'race_id' => $elfo->id
        ]);
        LastName::create([
            'name' => 'Luz Estelar',
            'race_id' => $elfo->id
        ]);

        // --- Anão ---
        LastName::create([
            'name' => 'Cabeça de Pedra',
            'race_id' => $anao->id
        ]);
        LastName::create([
            'name' => 'Martelo de Ferro',
            'race_id' => $anao->id
        ]);

        // --- Meio-Orc ---
        LastName::create([
            'name' => 'Esmaga-Crânio',
            'race_id' => $meioOrc->id
        ]);
        LastName::create([
            'name' => 'Cicatriz de Ferro',
            'race_id' => $meioOrc->id
        ]);

        // --- Meio-Elfo ---
        LastName::create([
            'name' => 'Vento do Leste',
            'race_id' => $meioElfo->id
        ]);
        LastName::create([
            'name' => 'Orvalho',
            'race_id' => $meioElfo->id
        ]);

        // --- Gnomo ---
        LastName::create([
            'name' => 'Engrenagem',
            'race_id' => $gnomo->id
        ]);
        LastName::create([
            'name' => 'Faisca',
            'race_id' => $gnomo->id
        ]);

        // --- Halfling ---
        LastName::create([
            'name' => 'Pé-Leve',
            'race_id' => $halfling->id
        ]);
        LastName::create([
            'name' => 'Chá-Verde',
            'race_id' => $halfling->id
        ]);

        // --- Draconato ---
        LastName::create([
            'name' => 'Preaxithyn',
            'race_id' => $draconato->id
        ]);
        LastName::create([
            'name' => 'Myastan',
            'race_id' => $draconato->id
        ]);

        // --- Bugbear ---
        LastName::create([
            'name' => 'Mão-Pesada',
            'race_id' => $bugbear->id
        ]);
        LastName::create([
            'name' => 'Presa-Negra',
            'race_id' => $bugbear->id
        ]);

        // --- Goblin ---
        LastName::create([
            'name' => 'Racha-Canela',
            'race_id' => $goblin->id
        ]);
        LastName::create([
            'name' => 'Dente-Podre',
            'race_id' => $goblin->id
        ]);
    }
}