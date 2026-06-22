<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ideal;

class IdealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Todos os ideais estruturados (Seus originais + o restante do bloco traduzido)
        $ideals = [
            ['ideal' => 'Fé', 'description' => 'Confio que minha divindade guiará minhas ações. Tenho fé de que, se eu trabalhar duro, as coisas vão dar certo. (Leal)'],
            ['ideal' => 'Tradição', 'description' => 'As antigas tradições de adoração e sacrifício devem ser preservadas e mantidas. (Leal)'],
            ['ideal' => 'Caridade', 'description' => 'Sempre tento ajudar aqueles que precisam, não importa o custo pessoal. (Bom)'],
            ['ideal' => 'Mudança', 'description' => 'Devemos ajudar a provocar as mudanças que os deuses estão constantemente operando no mundo. (Caótico)'],
            ['ideal' => 'Poder', 'description' => 'Espero um dia subir ao topo da hierarquia religiosa da minha fé. (Leal)'],
            ['ideal' => 'Aspiração', 'description' => 'Procuro provar que sou digno do favor do meu deus, comparando minhas ações com os ensinamentos dele ou dela. (Qualquer)'],
            ['ideal' => 'Independência', 'description' => 'Sou um espírito livre -- ninguém me diz o que fazer. (Caótico)'],
            ['ideal' => 'Justiça', 'description' => 'Nunca escolho como alvo pessoas que não podem se dar ao luxo de perder algumas moedas. (Leal)'],
            ['ideal' => 'Caridade', 'description' => 'Distribuo o dinheiro que adquiro para as pessoas que realmente precisam dele. (Bom)'],
            ['ideal' => 'Criatividade', 'description' => 'Nunca aplico o mesmo golpe duas vezes. (Caótico)'],
            ['ideal' => 'Amizade', 'description' => 'Bens materiais vêm e vão. Os laços de amizade duram para sempre. (Bom)'],
            ['ideal' => 'Aspiração', 'description' => 'Estou determinado a ser alguém na vida. (Qualquer)'],
            ['ideal' => 'Honra', 'description' => 'Não roubo de outros que estão no mesmo ofício. (Leal)'],
            ['ideal' => 'Liberdade', 'description' => 'Correntes foram feitas para serem quebradas, assim como aqueles que as forjam. (Caótico)'],
            ['ideal' => 'Caridade', 'description' => 'Roubo dos ricos para poder ajudar as pessoas necessitadas. (Bom)'],
            ['ideal' => 'Ganância', 'description' => 'Farei o que for preciso para me tornar rico. (Mau)'],
            ['ideal' => 'Pessoas', 'description' => 'Sou leal aos meus amigos, não a ideais, e o resto do mundo que vá para o quinto dos infernos por mim. (Neutro)'],
            ['ideal' => 'Redenção', 'description' => 'Existe uma faísca de bondade em cada um. (Bom)'],
            ['ideal' => 'Beleza', 'description' => 'Quando me apresento, torno o mundo melhor do que era. (Bom)'],
            ['ideal' => 'Tradição', 'description' => 'As histórias, lendas e canções do passado nunca devem ser esquecidas. (Leal)'],
            ['ideal' => 'Criatividade', 'description' => 'O mundo precisa de novas ideias e ações ousadas. (Caótico)'],
            ['ideal' => 'Ganância', 'description' => 'Estou nessa apenas pelo dinheiro e pela fama. (Mau)'],
            ['ideal' => 'Pessoas', 'description' => 'Gosto de ver os sorrisos nos rostos das pessoas quando me apresento. Isso é tudo o que importa. (Neutro)'],
            ['ideal' => 'Honestidade', 'description' => 'A arte deve refletir a alma; deve vir de dentro e revelar quem realmente somos. (Qualquer)'],
            ['ideal' => 'Respeito', 'description' => 'As pessoas merecem ser treated com dignidade e respeito. (Bom)'],
            ['ideal' => 'Justiça', 'description' => 'Ninguém deve receber tratamento preferencial perante a lei, e ninguém está acima da lei. (Leal)'],
            ['ideal' => 'Liberdade', 'description' => 'Tiranos não devem ter permissão para oprimir o povo. (Caótico)'],
            ['ideal' => 'Poderio', 'description' => 'Se eu me tornar forte, poderei pegar o que eu quiser -- o que eu mereço. (Mau)'],
            ['ideal' => 'Sinceridade', 'description' => 'Não adianta fingir ser algo que não sou. (Neutro)'],
            ['ideal' => 'Destino', 'description' => 'Nada e ninguém pode me desviar do meu chamado maior. (Qualquer)'],
            ['ideal' => 'Comunidade', 'description' => 'É dever de todas as pessoas civilizadas fortalecer os laços comunitários e a segurança da civilização. (Leal)'],
            ['ideal' => 'Generosidade', 'description' => 'Meus talentos me foram dados para que eu pudesse usá-los em benefício do mundo. (Bom)'],
            ['ideal' => 'Liberdade', 'description' => 'Todos devem ser livres para buscar seu próprio sustento. (Caótico)'],
            ['ideal' => 'Ganância', 'description' => 'Estou nessa apenas pelo dinheiro. (Mau)'],
            
            // Continuação da lista traduzida do bloco
            ['ideal' => 'Pessoas', 'description' => 'Sou comprometido com as pessoas com quem me importo, não com ideais. (Neutro)'],
            ['ideal' => 'Aspiração', 'description' => 'Trabalho duro para ser o melhor que há no meu ofício. (Qualquer)'],
            ['ideal' => 'Bem Maior', 'description' => 'Meus dons foram feitos para serem compartilhados com todos, não usados para meu próprio benefício. (Bom)'],
            ['ideal' => 'Lógica', 'description' => 'As emoções não devem nublar nosso senso do que é certo e verdadeiro, ou nosso pensamento lógico. (Leal)'],
            ['ideal' => 'Pensamento Livre', 'description' => 'A investigação e a curiosidade são os pilares do progresso. (Caótico)'],
            ['ideal' => 'Poder', 'description' => 'A solidão e a contemplação são caminhos para o poder místico ou mágico. (Mau)'],
            ['ideal' => 'Viva e Deixe Viver', 'description' => 'Intrometer-se nos assuntos dos outros só causa problemas. (Neutro)'],
            ['ideal' => 'Autoconhecimento', 'description' => 'Se você conhece a si mesmo, não resta mais nada para conhecer. (Qualquer)'],
            ['ideal' => 'Respeito', 'description' => 'O respeito me é devido por causa da minha posição, mas todas as pessoas, independentemente do status, merecem ser tratadas com dignidade. (Bom)'],
            ['ideal' => 'Responsabilidade', 'description' => 'É meu dever respeitar a autoridade daqueles acima de mim, assim como aqueles abaixo de mim devem respeitar a minha. (Leal)'],
            ['ideal' => 'Independência', 'description' => 'Devo provar que posso me virar sozinho sem os mimos da minha família. (Caótico)'],
            ['ideal' => 'Poder', 'description' => 'Se eu conseguir alcançar mais poder, ninguém vai me dizer o que fazer. (Mau)'],
            ['ideal' => 'Família', 'description' => 'O sangue fala mais alto que a água. (Qualquer)'],
            ['ideal' => 'Obrigação Nobre', 'description' => 'É meu dever proteger e cuidar das pessoas abaixo de mim. (Bom)'],
            ['ideal' => 'Mudança', 'description' => 'A vida é como as estações, em constante mudança, e nós devemos mudar com ela. (Caótico)'],
            ['ideal' => 'Bem Maior', 'description' => 'É responsabilidade de cada pessoa trazer a maior felicidade para toda a tribo. (Bom)'],
            ['ideal' => 'Honra', 'description' => 'Se eu desonrar a mim mesmo, desonro todo o meu clã. (Leal)'],
            ['ideal' => 'Poderio', 'description' => 'Os mais fortes foram feitos para governar. (Mau)'],
            ['ideal' => 'Natureza', 'description' => 'O mundo natural é mais importante do que todas as construções da civilização. (Neutro)'],
            ['ideal' => 'Glória', 'description' => 'Devo conquistar glória em batalha, para mim e para o meu clã. (Qualquer)'],
            ['ideal' => 'Conhecimento', 'description' => 'O caminho para o poder e autoaperfeiçoamento é através do conhecimento. (Neutro)'],
            ['ideal' => 'Beleza', 'description' => 'O que é belo nos aponta para além de si mesmo, em direção ao que é verdadeiro. (Bom)'],
            ['ideal' => 'Lógica', 'description' => 'As emoções não devem nublar nosso pensamento lógico. (Leal)'],
            ['ideal' => 'Sem Limites', 'description' => 'Nada deve acorrentar a possibilidade infinita inerente a toda a existência. (Caótico)'],
            ['ideal' => 'Poder', 'description' => 'O conhecimento é o caminho para o poder e a dominação. (Mau)'],
            ['ideal' => 'Autoaperfeiçoamento', 'description' => 'O objetivo de uma vida de estudos é a melhoria de si mesmo. (Qualquer)'],
            ['ideal' => 'Respeito', 'description' => 'A coisa que mantém um navio unido é o respeito mútuo entre o capitão e a tripulação. (Bom)'],
            ['ideal' => 'Justiça', 'description' => 'Todos nós fazemos o trabalho, então todos nós compartilhamos as recompensas. (Leal)'],
            ['ideal' => 'Liberdade', 'description' => 'O mar é a liberdade -- a liberdade de ir a qualquer lugar e fazer qualquer coisa. (Caótico)'],
            ['ideal' => 'Mestre', 'description' => 'Sou um predador, e os outros navios no mar são as minhas presas. (Mau)'],
            ['ideal' => 'Pessoas', 'description' => 'Sou comprometido com meus companheiros de tripulação, não com ideais. (Neutro)'],
            ['ideal' => 'Aspiração', 'description' => 'Algum dia terei meu próprio navio e guiarei meu próprio destino. (Qualquer)'],
            ['ideal' => 'Bem Maior', 'description' => 'Nosso destino é dar nossas vidas em defesa dos outros. (Bom)'],
            ['ideal' => 'Responsabilidade', 'description' => 'Faço o que devo e obedeço à autoridade justa. (Leal)'],
            ['ideal' => 'Independência', 'description' => 'Quando as pessoas seguem ordens cegamente, elas abraçam um tipo de tirania. (Caótico)'],
            ['ideal' => 'Poderio', 'description' => 'Na vida como na guerra, a força maior vence. (Mau)'],
            ['ideal' => 'Pessoas', 'description' => 'Ideais não valem a pena matar ou ir à guerra por eles. (Neutro)'],
            ['ideal' => 'Nação', 'description' => 'Minha cidade, nação ou povo são tudo o que importa. (Qualquer)'],
            ['ideal' => 'Respeito', 'description' => 'Todas as pessoas, ricas ou pobres, merecem respeito. (Bom)'],
            ['ideal' => 'Comunidade', 'description' => 'Temos que cuidar uns dos outros, porque ninguém mais vai fazer isso por nós. (Leal)'],
            ['ideal' => 'Mudança', 'description' => 'Os humildes são erguidos, e os altos e poderosos são derrubados. A mudança é a natureza das coisas. (Caótico)'],
            ['ideal' => 'Retribuição', 'description' => 'Os ricos precisam ver como são a vida e a morte nas sarjetas. (Mau)'],
            ['ideal' => 'Pessoas', 'description' => 'Ajudo as pessoas que me ajudam -- é isso que nos mantém vivos. (Neutro)'],
            ['ideal' => 'Aspiração', 'description' => 'Vou provar que sou digno de uma vida melhor. (Qualquer)'],
        ];

        // Insere todos através do loop único
        foreach ($ideals as $data) {
            Ideal::create([
                'ideal' => $data['ideal'],
                'description' => $data['description']
            ]);
        }
    }
}