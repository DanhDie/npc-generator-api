<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flaw;

class FlawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Todos os defeitos estruturados (Seus originais + o restante do bloco traduzido)
        $flaws = [
            // Seus originais
            'Julgo os outros severamente, e a mim mesmo de forma ainda mais rigorosa.',
            'Deposito confiança demais naqueles que detêm o poder na hierarquia do meu templo.',
            'Minha piedade às vezes me leva a confiar cegamente naqueles que professam fé no meu deus.',
            'Sou inflexível em meu modo de pensar.',
            'Sou desconfiado com estranhos e suspeito do pior a respeito deles.',
            'Uma vez que escolho um objetivo, fico obcecado por ele em detrimento de tudo o mais na minha vida.',
            'Não consigo resistir a um rosto bonito.',
            'Estou sempre endividado. Gasto meus ganhos ilícitos em luxos decadentes mais rápido do que consigo arrecadá-los.',
            'Estou convencido de que ninguém jamais conseguiria me enganar da forma como engano os outros.',
            'Sou ganancioso demais para o meu próprio bem. Não consigo resistir a correr um risco se houver dinheiro envolvido.',
            'Não consigo resistir a passar a perna em pessoas que são mais poderosas do que eu.',
            'Odeio admitir isso e vou me odiar por isso, mas vou correr e salvar minha própria pele se a situação ficar feia.',
            'Quando vejo algo valioso, não consigo pensar em mais nada a não ser em como roubá-lo.',
            'Quando confrontado com uma escolha entre o dinheiro e meus amigos, geralmente escolho o dinheiro.',
            'Se houver um plano, eu o esquecerei. Se eu não o esquecer, eu o ignorarei.',
            'Tenho um tique ou mania que revela quando estou mentindo.',
            'Dou meia-volta e fujo quando as coisas dão errado.',
            'Uma pessoa inocente está na prisão por um crime que eu cometi. E estou de boa com isso.',
            'Farei qualquer coisa para conquistar fama e renome.',
            'Sou vulnerável a um rosto bonito.',
            'Um escândalo me impede de voltar para casa para sempre. Esse tipo de problema parece me perseguir.',
            'Certa vez fiz uma sátira sobre um nobre que ainda quer a minha cabeça. Foi um erro que provavelmente repetirei.',
            'Tenho dificuldade em esconder meus verdadeiros sentimentos. Minha língua afiada me coloca em enrascadas.',
            'Apesar dos meus melhores esforços, sou não confiável para os meus amigos.',
            'O tirano que governa minha terra não medirá esforços para me ver morto.',
            'Estou convencido da importância do meu destino e cego para os meus defeitos e para o risco de fracasso.',
            'As pessoas que me conheciam quando eu era jovem sabem do meu segredo vergonhoso, por isso nunca mais poderei voltar para casa.',
            'Tenho uma fraqueza pelos vícios da cidade, especialmente bebida forte.',
            'Secretamente, acredito que as coisas seriam melhores se eu fosse um tirano governando a terra.',
            'Tenho dificuldade em confiar nos meus aliados.',
            'Farei qualquer coisa para colocar as mãos em algo raro ou de valor inestimável.',
            'Sou rápido em presumir que alguém está tentando me passar para trás.',

            // Continuação da lista traduzida do bloco
            'Ninguém deve descobrir que uma vez roubei dinheiro dos cofres da guilda.',
            'Nunca estou satisfeito com o que tenho — sempre quero mais.',
            'Eu mataria para adquirir um título nobre.',
            'Sou horrivelmente ciumento de qualquer um que ofusque o meu trabalho. Onde quer que eu vá, estou cercado por rivais.',
            'Agora que retornei ao mundo, aproveito seus prazeres um pouco demais.',
            'Nutro pensamentos sombrios e sanguinários que o meu isolamento falhou em acalmar.',
            'Sou dogmático em meus pensamentos e filosofia.',
            'Deixo que minha necessidade de vencer discussões ofusque as amizades e a harmonia.',
            'Eu arriscaria demais para descobrir um pedaço perdido de conhecimento.',
            'Gosto de guardar segredos e não os compartilharei com ninguém.',
            'Secretamente acredito que todos estão abaixo de mim.',
            'Escondo um segredo verdadeiramente escandaloso que poderia arruinar minha família para sempre.',
            'Muitas vezes ouço insultos e ameaças veladas em cada palavra dirigida a mim, e sou rápido em me irar.',
            'Tenho um desejo insaciável por prazeres carnais.',
            'Na verdade, o mundo gira ao meu redor.',
            'Por minhas palavras e ações, muitas vezes trago vergonha para minha família.',
            'Sou demasiadamente fascinado por cerveja, vinho e outros intoxicantes.',
            'Não há espaço para cautela em uma vida vivida ao máximo.',
            'Lembro-me de cada insulto que recebi e alimento um ressentimento silencioso contra qualquer um que já me tenha feito mal.',
            'Sou lento para confiar em membros de outras raças.',
            'A violência é a minha resposta para quase qualquer desafio.',
            'Não espere que eu salve aqueles que não podem salvar a si mesmos. É a lei da natureza que os fortes prosperem e os fracos pereçam.',
            'Sou facilmente distraído pela promessa de informação.',
            'A maioria das pessoas grita e corre quando vê um demônio. Eu paro e tomo notas sobre a sua anatomia.',
            'Desvendar um mistério antigo vale o preço de uma civilização.',
            'Ignoro soluções óbvias em favor de soluções complicadas.',
            'Falo sem realmente pensar nas minhas palavras, invariavelmente insultando os outros.',
            'Não consigo guardar um segredo para salvar minha vida, ou a de qualquer outra pessoa.',
            'Sigo ordens, mesmo se achar que estão erradas.',
            'Direi qualquer coisa para evitar ter que fazer trabalho extra.',
            'Assim que alguém questiona minha coragem, eu nunca recuo, não importa quão perigosa seja a situação.',
            'Assim que começo a beber, é difícil para mim parar.',
            'Não consigo evitar pegar moedas soltas e outras bugigangas com as quais me deparo.',
            'Meu orgulho provavelmente me levará à destruição.',
            'O inimigo monstruoso que enfrentamos em batalha ainda me deixa tremendo de medo.',
            'Tenho pouco respeito por qualquer um que não seja um guerreiro comprovado.',
            'Cometi um erro terrível em batalha que custou muitas vidas — e faria qualquer coisa para manter esse erro em segredo.',
            'Meu ódio pelos meus inimigos é cego e irracional.',
            'Obedeço à lei, mesmo se a lei causar miséria.',
            'Eu preferiria comer minha armadura a admitir quando estou errado.',
            'Se eu estiver em menor número, sempre fujo de uma luta.',
            'Ouro parece muito dinheiro para mim, e farei quase qualquer coisa por mais dele.',
            'Nunca confiarei totalmente em ninguém além de mim mesmo.',
            'Eu preferiria matar alguém enquanto dorme a lutar de forma justa.',
            'Não é roubo se eu preciso disso mais do que outra pessoa.',
            'Pessoas que não cuidam de si mesmas recebem o que merecem.',
        ];

        // Insere todos através do loop único
        foreach ($flaws as $description) {
            Flaw::create([
                'description' => $description
            ]);
        }
    }
}