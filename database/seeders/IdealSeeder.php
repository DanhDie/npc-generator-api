<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ideal;

class IdealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ideal::create([
            'ideal' => 'Fé',
            'description' => 'Confio que minha divindade guiará minhas ações. Tenho fé de que, se eu trabalhar duro, as coisas vão dar certo. (Leal)'
        ]);

        Ideal::create([
            'ideal' => 'Tradição',
            'description' => 'As antigas tradições de adoração e sacrifício devem ser preservadas e mantidas. (Leal)'
        ]);

        Ideal::create([
            'ideal' => 'Caridade',
            'description' => 'Sempre tento ajudar aqueles que precisam, não importa o custo pessoal. (Bom)'
        ]);

        Ideal::create([
            'ideal' => 'Mudança',
            'description' => 'Devemos ajudar a provocar as mudanças que os deuses estão constantemente operando no mundo. (Caótico)'
        ]);

        Ideal::create([
            'ideal' => 'Poder',
            'description' => 'Espero um dia subir ao topo da hierarquia religiosa da minha fé. (Leal)'
        ]);

        Ideal::create([
            'ideal' => 'Aspiração',
            'description' => 'Procuro provar que sou digno do favor do meu deus, comparando minhas ações com os ensinamentos dele ou dela. (Qualquer)'
        ]);

        Ideal::create([
            'ideal' => 'Independência',
            'description' => 'Sou um espírito livre -- ninguém me diz o que fazer. (Caótico)'
        ]);

        Ideal::create([
            'ideal' => 'Justiça',
            'description' => 'Nunca escolho como alvo pessoas que não podem se dar ao luxo de perder algumas moedas. (Leal)'
        ]);

        Ideal::create([
            'ideal' => 'Caridade',
            'description' => 'Distribuo o dinheiro que adquiro para as pessoas que realmente precisam dele. (Bom)'
        ]);

        Ideal::create([
            'ideal' => 'Criatividade',
            'description' => 'Nunca aplico o mesmo golpe duas vezes. (Caótico)'
        ]);

        Ideal::create([
            'ideal' => 'Amizade',
            'description' => 'Bens materiais vêm e vão. Os laços de amizade duram para sempre. (Bom)'
        ]);

        Ideal::create([
            'ideal' => 'Aspiração',
            'description' => 'Estou determinado a ser alguém na vida. (Qualquer)'
        ]);

        Ideal::create([
            'ideal' => 'Honra',
            'description' => 'Não roubo de outros que estão no mesmo ofício. (Leal)'
        ]);

        Ideal::create([
            'ideal' => 'Liberdade',
            'description' => 'Correntes foram feitas para serem quebradas, assim como aqueles que as forjam. (Caótico)'
        ]);

        Ideal::create([
            'ideal' => 'Caridade',
            'description' => 'Roubo dos ricos para poder ajudar as pessoas necessitadas. (Bom)'
        ]);

        Ideal::create([
            'ideal' => 'Ganância',
            'description' => 'Farei o que for preciso para me tornar rico. (Mau)'
        ]);

        Ideal::create([
            'ideal' => 'Pessoas',
            'description' => 'Sou leal aos meus amigos, não a ideais, e o resto do mundo que vá para o quinto dos infernos por mim. (Neutro)'
        ]);

        Ideal::create([
            'ideal' => 'Redenção',
            'description' => 'Existe uma faísca de bondade em cada um. (Bom)'
        ]);

        Ideal::create([
            'ideal' => 'Beleza',
            'description' => 'Quando me apresento, torno o mundo melhor do que era. (Bom)'
        ]);

        Ideal::create([
            'ideal' => 'Tradição',
            'description' => 'As histórias, lendas e canções do passado nunca devem ser esquecidas. (Leal)'
        ]);

        Ideal::create([
            'ideal' => 'Criatividade',
            'description' => 'O mundo precisa de novas ideias e ações ousadas. (Caótico)'
        ]);

        Ideal::create([
            'ideal' => 'Ganância',
            'description' => 'Estou nessa apenas pelo dinheiro e pela fama. (Mau)'
        ]);

        Ideal::create([
            'ideal' => 'Pessoas',
            'description' => 'Gosto de ver os sorrisos nos rostos das pessoas quando me apresento. Isso é tudo o que importa. (Neutro)'
        ]);

        Ideal::create([
            'ideal' => 'Honestidade',
            'description' => 'A arte deve refletir a alma; deve vir de dentro e revelar quem realmente somos. (Qualquer)'
        ]);

        Ideal::create([
            'ideal' => 'Respeito',
            'description' => 'As pessoas merecem ser tratadas com dignidade e respeito. (Bom)'
        ]);

        Ideal::create([
            'ideal' => 'Justiça',
            'description' => 'Ninguém deve receber tratamento preferencial perante a lei, e ninguém está acima da lei. (Leal)'
        ]);

        Ideal::create([
            'ideal' => 'Liberdade',
            'description' => 'Tiranos não devem ter permissão para oprimir o povo. (Caótico)'
        ]);

        Ideal::create([
            'ideal' => 'Poderio',
            'description' => 'Se eu me tornar forte, poderei pegar o que eu quiser -- o que eu mereço. (Mau)'
        ]);

        Ideal::create([
            'ideal' => 'Sinceridade',
            'description' => 'Não adianta fingir ser algo que não sou. (Neutro)'
        ]);

        Ideal::create([
            'ideal' => 'Destino',
            'description' => 'Nada e ninguém pode me desviar do meu chamado maior. (Qualquer)'
        ]);

        Ideal::create([
            'ideal' => 'Comunidade',
            'description' => 'É dever de todas as pessoas civilizadas fortalecer os laços comunitários e a segurança da civilização. (Leal)'
        ]);

        Ideal::create([
            'ideal' => 'Generosidade',
            'description' => 'Meus talentos me foram dados para que eu pudesse usá-los em benefício do mundo. (Bom)'
        ]);

        Ideal::create([
            'ideal' => 'Liberdade',
            'description' => 'Todos devem ser livres para buscar seu próprio sustento. (Caótico)'
        ]);

        Ideal::create([
            'ideal' => 'Ganância',
            'description' => 'Estou nessa apenas pelo dinheiro. (Mau)'
        ]);
    }
}
