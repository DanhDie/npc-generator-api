<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LastName;
use App\Models\Race;

class LastNameSeeder extends Seeder
{
    public function run(): void
    {
        // Busca as raças existentes
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

        // Todos os sobrenomes estruturados com base na sua lista oficial
        $allLastNames = [
            // --- ANÃO (Nomes de Clãs oficiais em inglês) ---
            'anao' => [
                'id' => $anao->id,
                'names' => ['Balderk', 'Battlehammer', 'Brawnanvil', 'Dankil', 'Fireforge', 'Frostbeard', 'Gorunn', 'Holderhek']
            ],

            // --- ELFO (Sobrenomes originais sem tradução) ---
            'elfo' => [
                'id' => $elfo->id,
                'names' => ['Amakiir', 'Amastacia', 'Galanodel', 'Holimion', 'Ilphelkiir', 'Liadon', 'Meliamne', 'Nailo']
            ],

            // --- HALFLING (Nomes de família oficiais traduzidos do livro) ---
            'halfling' => [
                'id' => $halfling->id,
                'names' => ['Cata-Escovas', 'Bom-Barril', 'Garrafa Verde', 'Alta Colina', 'Baixa Colina', 'Prato Cheio', 'Folha de Chá', 'Espinhudo']
            ],

            // --- DRACONATO (Nomes de Clãs oficiais do livro) ---
            'draconato' => [
                'id' => $draconato->id,
                'names' => ['Clethtinthiallor', 'Daardendrian', 'Delmirev', 'Drachedandion', 'Fenkenkabradon', 'Kepeshkmolik', 'Kerrhylon', 'Kimbatuul']
            ],

            // --- GNOMO (Nomes de Clãs oficiais do livro) ---
            'gnomo' => [
                'id' => $gnomo->id,
                'names' => ['Beren', 'Daergel', 'Folkor', 'Garrick', 'Nackle', 'Murnig', 'Ningel', 'Raulnor']
            ],

            // --- MEIO-ELFO (Mistura os sobrenomes Humanos e Élficos sem tradução) ---
            'meioElfo' => [
                'id' => $meioElfo->id,
                'names' => ['Amakiir', 'Galanodel', 'Liadon', 'Nailo', 'Brightwood', 'Evenwood', 'Windrunner', 'Woodfont']
            ],

            // --- MEIO-ORC (Nomes de Tribos/Clãs Orcs do cenário oficial) ---
            'meioOrc' => [
                'id' => $meioOrc->id,
                'names' => ['Many-Arrows', 'Deathstable', 'Screaming-Eye', 'Gnashtooth', 'Ironshield', 'Bloodclaws', 'Bonecutter', 'Thunderfist']
            ],

            // --- HUMANO (Sobrenomes clássicos das regiões do Livro do Jogador) ---
            'humano' => [
                'id' => $humano->id,
                'names' => ['Brightwood', 'Helder', 'Hornraven', 'Lackman', 'Stormwind', 'Ankhalab', 'Jassan', 'Chergoba']
            ],

            // --- TIEFLING (Nomes baseados nas linhagens nobres de Infinitas Mentiras/Cenário oficial) ---
            'tiefling' => [
                'id' => $tiefling->id,
                'names' => ['Sorrow', 'Ashen', 'Crypt', 'Torment', 'Vex', 'Malice', 'Void', 'Gloom']
            ],

            // --- BUGBEAR (Nomes de bandos e epítetos brutais) ---
            'bugbear' => [
                'id' => $bugbear->id,
                'names' => ['Hairyfoot', 'Skullcleaver', 'Bonecrusher', 'Shadowstalker', 'Bloodfangs', 'Ironhide', 'Gorgonstare', 'Sharpfang']
            ],

            // --- GOBLIN (Nomes baseados em tribos canônicas de D&D) ---
            'goblin' => [
                'id' => $goblin->id,
                'names' => ['Batiri', 'Cragmaw', 'Mudbite', 'Spiderbite', 'Ratsmacker', 'Sharpstick', 'Gutterrunner', 'Sneakthief']
            ],
        ];

        // Executa o loop único para inserir os sobrenomes revisados no banco
        foreach ($allLastNames as $race) {
            foreach ($race['names'] as $lastName) {
                LastName::create([
                    'name' => $lastName,
                    'race_id' => $race['id']
                ]);
            }
        }
    }
}