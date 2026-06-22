<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PTrait;

class PTraitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lista completa com todos os traços de personalidade traduzidos
        $traits = [
            // Suas originais
            'Eu idolatro um herói específico da minha fé e constantemente me refiro aos feitos e ao exemplo dessa pessoa.',
            'Consigo encontrar pontos em comum até entre os inimigos mais ferozes, tendo empatia por eles e sempre trabalhando em direção à paz.',
            'Vejo presságios em cada evento e ação. Os deuses tentam falar conosco, nós apenas precisamos ouvir.',
            'Nada pode abalar minha atitude otimista.',
            'Eu cito (ou cito de forma errada) os textos sagrados e provérbios em quase todas as situações.',
            'Sou tolerante (ou intolerante) com outras religiões e respeito (ou condeno) a adoração a outros deuses.',
            'Desfrutei de boa comida, bebida e da alta sociedade entre a elite do meu templo. A vida severa me incomoda.',
            'Passei tanto tempo no templo que tenho pouca experiência prática em lidar com as pessoas no mundo exterior.',
            'Eu me apaixono e desapaixono facilmente, e estou sempre cortejando alguém.',

            // Continuação da lista traduzida
            'Tenho uma piada para cada ocasião, especialmente ocasiões onde o humor é inapropriado.',
            'A lisonja é o meu truque preferido para conseguir o que quero.',
            'Sou um jogador nato que não consegue resistir a correr um risco por uma recompensa em potencial.',
            'Eu minto sobre quase tudo, mesmo quando não há uma boa razão para isso.',
            'Sarcasmo e insultos são as minhas armas de escolha.',
            'Mantenho múltiplos símbolos sagrados comigo e invoco qualquer divindade que possa ser útil em um determinado momento.',
            'Eu coloco no bolso qualquer coisa que vejo que possa ter algum valor.',
            'Sempre tenho um plano para o que fazer quando as coisas dão errado.',
            'Estou sempre calmo, não importa qual seja a situação. Nunca elevo minha voz ou deixo minhas emoções me controlarem.',
            'A primeira coisa que faço em um lugar novo é notar a localização de tudo o que é valioso — ou onde tais coisas poderiam estar escondidas.',
            'Eu preferiria fazer um novo amigo a fazer um novo inimigo.',
            'Sou incrivelmente lento para confiar. Aqueles que parecem mais justos muitas vezes têm mais a esconder.',
            'Não presto atenção aos riscos de uma situação. Nunca me diga as probabilidades.',
            'A melhor maneira de me fazer fazer algo é me dizer que eu não posso fazer.',
            'Eu explodo ao menor insulto.',
            'Conheço uma história relevante para quase todas as situações.',
            'Sempre que chego a um lugar novo, coleciono rumores locais e espalho fofocas.',
            'Sou um romântico incurável, sempre procurando por aquela "pessoa especial".',
            'Ninguém fica bravo comigo ou perto de mim por muito tempo, já que consigo neutralizar qualquer quantidade de tensão.',
            'Adoro um bom insulto, mesmo um direcionado a mim.',
            'Fico amargurado se não for o centro das atenções.',
            'Não aceito nada menos que a perfeição.',
            'Mudo de humor ou de opinião tão rapidamente quanto mudo o tom em uma música.',
            'Julgo as pessoas por suas ações, não por suas palavras.',
            'Se alguém estiver em apuros, estou sempre disposto a oferecer ajuda.',
            'Quando decido fazer algo, vou até o fim, não importa o que fique no meu caminho.',
            'Tenho um forte senso de jogo justo e sempre tento encontrar a solução mais equitativa para discussões.',
            'Sou confiante em minhas próprias habilidades e faço o que posso para incutir confiança nos outros.',
            'Pensar é para os outros. Eu prefiro a ação.',
            'Uso palavras longas de forma errada em uma tentativa de parecer mais inteligente.',
            'Fico entediado facilmente. Quando é que vou seguir em frente com o meu destino?',
            'Acredito que tudo o que vale a pena fazer, vale a pena fazer bem feito. Não posso evitar — sou um perfeccionista.',
            'Sou um esnobe que olha de cima para aqueles que não conseguem apreciar a bela arte.',
            'Sempre quero saber como as coisas funcionam e o que move as pessoas.',
            'Sou cheio de aforismos espirituosos e tenho um provérbio para cada ocasião.',
            'Sou rude com pessoas que carecem do meu compromisso com o trabalho duro e o jogo justo.',
            'Gosto de falar longamente sobre a minha profissão.',
            'Não me desfaço do meu dinheiro facilmente e vou pechinchar incansavelmente para conseguir o melhor negócio possível.',
            'Sou bem conhecido pelo meu trabalho e quero ter certeza de que todos o apreciem. Sempre fico surpreso quando as pessoas não ouviram falar de mim.',
            'Estive isolado por tanto tempo que raramente falo, preferindo gestos e o eventual grunhido.',
            'Sou totalmente sereno, mesmo diante do desastre.',
            'O líder da minha comunidade tem algo sábio a dizer sobre cada tópico, e estou ansioso para compartilhar essa sabedoria.',
            'Sinto uma tremenda empatia por todos os que sofrem.',
            'Sou alheio à etiqueta e às expectativas sociais.',
            'Conecto tudo o que acontece comigo a um grande plano cósmico.',
            'Muitas vezes me perco em meus próprios pensamentos e contemplações, tornando-me alheio ao que está ao meu redor.',
            'Estou trabalhando em uma grande teoria filosófica e adoro compartilhar minhas ideias.',
            'Minha lisonja eloquente faz com que todos com quem converso se sintam a pessoa mais maravilhosa e importante do mundo.',
            'O povo comum me ama por minha bondade e generosidade.',
            'Ninguém poderia duvidar, ao olhar para o meu porte régio, que estou um nível acima das massas iletradas.',
            'Cuidou muito para sempre estar com a minha melhor aparência e seguir as últimas modas.',
            'Não gosto de sujar minhas mãos e não serei pego morto em acomodações inadequadas.',
            'Apesar do meu nascimento, não me coloco acima das outras pessoas. Todos temos o mesmo sangue.',
            'Meu favor, uma vez perdido, é perdido para sempre.',
            'Se você me causar um dano, eu vou esmagar você, arruinar seu nome e salgar seus campos.',
            'Sou movido por um desejo de viajar que me levou para longe de casa.',
            'Examino e cuido dos meus amigos como se fossem uma ninhada de filhotes recém-nascidos.',
            'Uma vez corri vinte e cinco milhas sem parar para alertar meu clã sobre a aproximação de uma horda orc. Faria de novo se precisasse.',
            'Tenho uma lição para cada situação, extraída da observação da natureza.',
            'Não dou importância a pessoas ricas ou bem-educadas. Dinheiro e modos não vão salvar você de um coruja-urso faminto.',
            'Estou sempre pegando coisas, mexendo nelas distraidamente e, às vezes, quebrando-as acidentalmente.',
            'Sinto-me muito mais confortável perto de animais do que de pessoas.',
            'Fui, de fato, criado por lobos.',
            'Uso palavras polissilábicas para transmitir a impressão de grande erudição.',
            'Li todos os livros das maiores bibliotecas do mundo — ou gosto de me gabar de ter lido.',
            'Estou acostumado a ajudar aqueles que não são tão espertos quanto eu, e pacientemente explico tudo e qualquer coisa para os outros.',
            'Não há nada que eu goste mais do que um bom mistério.',
            'Estou disposto a ouvir todos os lados de um argumento antes de fazer meu próprio julgamento.',
            'Eu... falo... devagar... quando converso... com idiotas... o que... quase... todo mundo... é... comparado... a mim.',
            'Sou horrivelmente, horrivelmente desajeitado em situações sociais.',
            'Estou convencido de que as pessoas estão sempre tentando roubar meus segredos.',
            'Meus amigos sabem que podem contar comigo, não importa o que aconteça.',
            'Trabalho duro para poder jogar duro quando o trabalho estiver feito.',
            'Gosto de navegar por novos portos e fazer novos amigos sobre uma caneca de cerveja.',
            'Eu exagero a verdade pelo bem de uma boa história.',
            'Para mim, uma briga de taverna é uma bela maneira de conhecer uma nova cidade.',
            'Nunca deixo passar uma aposta amigável.',
            'Minha linguagem é tão suja quanto um ninho de otyugh.',
            'Gosto de um trabalho bem feito, especialmente se eu puder convencer outra pessoa a fazê-lo.',
            'Sou sempre educado e respeitoso.',
            'Sou assombrado por memórias de guerra. Não consigo tirar as imagens de violência da minha mente.',
            'Perdi amigos demais e sou lento para fazer novos.',
            'Sou cheio de contos inspiradores e de advertência da minha experiência militar, relevantes para quase todas as situações de combate.',
            'Consigo encarar um cão infernal sem piscar.',
            'Gosto de ser forte e gosto de quebrar coisas.',
            'Tenho um senso de humor rude.',
            'Enfrento os problemas de frente. Uma solução simples e direta é o melhor caminho para o sucesso.',
            'Escondo pedaços de comida e bugigangas em meus bolsos.',
            'Faço muitas perguntas.',
            'Gosto de me espremer em lugares pequenos onde ninguém mais consegue chegar até mim.',
            'Durmo com as costas apoiadas em uma parede ou árvore, com tudo o que possuo embrulhado em um fardo nos meus braços.',
            'Como como um porco e tenho maus modos.',
            'Acho que qualquer pessoa que seja legal comigo está escondendo uma intenção maligna.',
            'Não gosto de tomar banho.',
            'Digo sem rodeios o que as outras pessoas estão insinuando ou escondendo.',
        ];

        // Insere todos de uma vez através do loop
        foreach ($traits as $trait) {
            PTrait::create([
                'description' => $trait
            ]);
        }
    }
}