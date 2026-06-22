<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PTrait;

class PTraitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PTrait::create([
            'description' => 'Eu idolatro um herói específico da minha fé e constantemente me refiro aos feitos e ao exemplo dessa pessoa.'
        ]);

        PTrait::create([
            'description' => 'Consigo encontrar pontos em comum até entre os inimigos mais ferozes, tendo empatia por eles e sempre trabalhando em direção à paz.'
        ]);

        PTrait::create([
            'description' => 'Vejo presságios em cada evento e ação. Os deuses tentam falar conosco, nós apenas precisamos ouvir.'
        ]);

        PTrait::create([
            'description' => 'Nada pode abalar minha atitude otimista.'
        ]);

        PTrait::create([
            'description' => 'Eu cito (ou cito de forma errada) os textos sagrados e provérbios em quase todas as situações.'
        ]);

        PTrait::create([
            'description' => 'Sou tolerante (ou intolerante) com outras religiões e respeito (ou condeno) a adoração a outros deuses.'
        ]);

        PTrait::create([
            'description' => 'Desfrutei de boa comida, bebida e da alta sociedade entre a elite do meu templo. A vida severa me incomoda.'
        ]);

        PTrait::create([
            'description' => 'Passei tanto tempo no templo que tenho pouca experiência prática em lidar com as pessoas no mundo exterior.'
        ]);

        PTrait::create([
            'description' => 'Eu me apaixono e desapaixono facilmente, e estou sempre cortejando alguém.'
        ]);
            }
}
