<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FirstName;
use App\Models\Race;

class FirstNameSeeder extends Seeder
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

        // Todos os nomes estruturados por raça e gênero
        $allNames = [
            // --- HUMANO ---
            ['race_id' => $humano->id, 'gender' => 'M', 'names' => ['Marcus', 'Boran', 'Fodel', 'Glar', 'Grath', 'Mandar']],
            ['race_id' => $humano->id, 'gender' => 'F', 'names' => ['Julia', 'Alethra', 'Kara', 'Natali', 'Pela', 'Zora']],

            // --- ELFO ---
            ['race_id' => $elfo->id, 'gender' => 'M', 'names' => ['Aelar', 'Adran', 'Aramil', 'Arannis', 'Aust', 'Berrian']],
            ['race_id' => $elfo->id, 'gender' => 'F', 'names' => ['Lythia', 'Adrie', 'Althaea', 'Anastrianna', 'Andraste', 'Bethrynna']],

            // --- ANÃO ---
            ['race_id' => $anao->id, 'gender' => 'M', 'names' => ['Thorin', 'Adrik', 'Alberich', 'Baern', 'Barendd', 'Bruenor']],
            ['race_id' => $anao->id, 'gender' => 'F', 'names' => ['Helga', 'Amber', 'Artin', 'Audhild', 'Bardryn', 'Dagnal']],

            // --- MEIO-ORC ---
            ['race_id' => $meioOrc->id, 'gender' => 'M', 'names' => ['Holgar', 'Dench', 'Feng', 'Gell', 'Henk', 'Imsh']],
            ['race_id' => $meioOrc->id, 'gender' => 'F', 'names' => ['Vola', 'Baggi', 'Emen', 'Engong', 'Kansif', 'Myev']],

            // --- MEIO-ELFO ---
            ['race_id' => $meioElfo->id, 'gender' => 'M', 'names' => ['Tanis', 'Carric', 'Enialis', 'Erdan', 'Erevan', 'Galinndan']],
            ['race_id' => $meioElfo->id, 'gender' => 'F', 'names' => ['Arwen', 'Caelynn', 'Drusilia', 'Enna', 'Felosial', 'Ielenia']],

            // --- GNOMO ---
            ['race_id' => $gnomo->id, 'gender' => 'M', 'names' => ['Fizzlebang', 'Alston', 'Alvyn', 'Boddynock', 'Brocc', 'Burgell']],
            ['race_id' => $gnomo->id, 'gender' => 'F', 'names' => ['Nissa', 'Bimpnottin', 'Breena', 'Caramip', 'Carlin', 'Donella']],

            // --- HALFLING ---
            ['race_id' => $halfling->id, 'gender' => 'M', 'names' => ['Bilbo', 'Alton', 'Ander', 'Cade', 'Corrin', 'Eldon']],
            ['race_id' => $halfling->id, 'gender' => 'F', 'names' => ['Rosie', 'Andry', 'Bree', 'Callie', 'Cora', 'Euphemia']],

            // --- DRACONATO ---
            ['race_id' => $draconato->id, 'gender' => 'M', 'names' => ['Torinn', 'Arjhan', 'Balasar', 'Bharash', 'Donaar', 'Ghesh']],
            ['race_id' => $draconato->id, 'gender' => 'F', 'names' => ['Kava', 'Akra', 'Biri', 'Daar', 'Farideh', 'Harann']],

            // --- TIEFLING ---
            ['race_id' => $tiefling->id, 'gender' => 'M', 'names' => ['Melek', 'Akmenos', 'Amnon', 'Barakas', 'Damakos', 'Ekemon']],
            ['race_id' => $tiefling->id, 'gender' => 'F', 'names' => ['Kallista', 'Akta', 'Anakis', 'Bryseis', 'Criella', 'Damaia']],
            ['race_id' => $tiefling->id, 'gender' => 'A', 'names' => ['Poesia', 'Ternura', 'Desespero', 'Arte', 'Canção', 'Crença', 'Excelência', 'Esperança']],

            // --- BUGBEAR ---
            ['race_id' => $bugbear->id, 'gender' => 'M', 'names' => ['Karg', 'Hrak', 'Grumm', 'Thrug', 'Krooth', 'Zuhg']],
            ['race_id' => $bugbear->id, 'gender' => 'F', 'names' => ['Gora', 'Gnarla', 'Brakka', 'Kraela', 'Vug', 'Surg']],

            // --- GOBLIN ---
            ['race_id' => $goblin->id, 'gender' => 'M', 'names' => ['Snikrot', 'Droop', 'Gark', 'Klay', 'Nibs', 'Sly']],
            ['race_id' => $goblin->id, 'gender' => 'F', 'names' => ['Riz', 'Breeg', 'Gizil', 'Pip', 'Ria', 'Vix']],
        ];

        // Executa um loop único para inserir todos os nomes no banco de dados
        foreach ($allNames as $group) {
            foreach ($group['names'] as $name) {
                FirstName::create([
                    'name' => $name,
                    'gender' => $group['gender'],
                    'race_id' => $group['race_id']
                ]);
            }
        }
    }
}