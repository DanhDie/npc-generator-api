<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bond;

class BondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Todos os vínculos estruturados (Seus originais + o restante do bloco traduzido)
        $bonds = [
            // Seus originais
            'Eu morreria para recuperar um artefato antigo da minha fé que foi perdido há muito tempo.',
            'Um dia me vingarei da hierarquia corrupta do templo que me rotulou como herético.',
            'Devo minha vida ao sacerdote que me acolheu quando meus pais morreram.',
            'Tudo o que faço é pelo povo comum.',
            'Farei qualquer coisa para proteger o templo onde servi.',
            'Procuro preservar um texto sagrado que meus inimigos consideram herético e tentam destruir.',
            'Passei a perna na pessoa errada e devo trabalhar para garantir que esse indivíduo nunca cruze o meu caminho ou o daqueles de quem gosto.',
            'Devo tudo ao meu mentor -- uma pessoa horrível que provavelmente está apodrecendo em alguma prisão.',
            'Em algum lugar por aí eu tenho um filho que não me conhece. Estou tornando o mundo melhor para ele ou ela.',
            'Venho de uma família nobre e um dia irei recuperar minhas terras e meu título daqueles que os roubaram de mim.',
            'Uma pessoa poderosa matou alguém que eu amo. Um dia, em breve, terei minha vingança.',
            'Eu enganei e arruinei uma pessoa que não merecia. Procuro redimir meus erros, mas talvez nunca seja capaz de me perdoar.',
            'Estou tentando pagar uma dívida antiga que devo a um benfeitor generoso.',
            'Meus ganhos ilícitos vão para o sustento da minha família.',
            'Algo importante foi tirado de mim e pretendo roubá-lo de volta.',
            'Eu me tornarei o maior ladrão que já existiu.',
            'Sou culpado de um crime terrível. Espero poder me redimir por isso.',
            'Alguém que eu amava morreu por causa de um erro que cometi. Isso nunca acontecerá novamente.',
            'Meu instrumento é meu bem mais precioso e me lembra de alguém que amo.',
            'Alguém roubou meu precioso instrumento e algum dia eu o terei de volta.',
            'Quero ser famoso, custe o que custar.',
            'Eu idolatro um herói dos velhos contos e meço meus feitos com base nos dessa pessoa.',
            'Farei qualquer coisa para me provar superior ao meu odiado rival.',
            'Eu faria qualquer coisa pelos outros membros da minha antiga trupe.',
            'Tenho uma família, mas não faço ideia de onde estão. Um dia, espero vê-los novamente.',
            'Trabalhei a terra, amo a terra e protegerei a terra.',
            'Um nobre orgulhoso certa vez me deu uma surra horrível e eu me vingarei de qualquer valentão que encontrar.',
            'Minhas ferramentas são símbolos da minha vida passada e as carrego comigo para nunca esquecer minhas raízes.',
            'Protejo aqueles que não podem se proteger.',
            'Gostaria que meu amor de infância tivesse vindo comigo em busca do meu destino.',
            'A oficina onde aprendi meu ofício é o lugar mais importante do mundo para mim.',
            'Criei uma grande obra para alguém e depois a considerei indigna de recebê-la. Ainda estou procurando por alguém que seja digno.',
            'Devo uma grande dívida à minha guilda por me moldar na pessoa que sou hoje.',
            'Persigo a riqueza para garantir o amor de alguém.',

            // Continuação da lista traduzida do bloco
            'Um dia retornarei à minha guilda e provarei que sou o maior artesão de todos.',
            'Vou me vingar das forças do mal que destruíram meu local de trabalho e arruinaram meu sustento.',
            'Nada é mais importante do que os outros membros do meu eremitério, ordem ou associação.',
            'Entreio em reclusão para me esconder daqueles que ainda podem estar me caçando. Algum dia terei que enfrentá-los.',
            'Ainda estou buscando a iluminação que persegui em minha reclusão, e ela ainda me escapa.',
            'Entrei em reclusão porque amava alguém que eu não podia ter.',
            'Caso minha descoberta venha à luz, ela poderia trazer a ruína para o mundo.',
            'Meu isolamento me deu uma grande visão sobre um grande mal que somente eu posso destruir.',
            'Enfrentarei qualquer desafio para ganhar a aprovação da minha família.',
            'A aliança da minha casa com outra família nobre deve ser mantida a todo custo.',
            'Nada é mais importante do que os outros membros da minha família.',
            'Estou apaixonado pelo herdeiro de uma família que a minha família despreza.',
            'Minha lealdade ao meu soberano é inabalável.',
            'O povo comum deve me ver como um herói do povo.',
            'Minha família, clã ou tribo é a coisa mais importante na minha vida, mesmo quando estão longe de mim.',
            'Um dano à natureza intocada do meu lar é um dano a mim.',
            'Trarei uma ira terrível sobre os malfeitores que destruíram minha terra natal.',
            'Sou o último da minha tribo, e cabe a mim garantir que os nomes deles entrem para as lendas.',
            'Sofro visões terríveis de um desastre iminente e farei de tudo para impedi-lo.',
            'É meu dever gerar filhos para sustentar minha tribo.',
            'É meu dever proteger meus estudantes.',
            'Tenho um texto antigo que guarda segredos terríveis que não devem cair nas mãos erradas.',
            'Trabalho para preservar uma biblioteca, universidade, scriptorium ou monastério.',
            'O trabalho da minha vida é uma série de tomos relacionados a um campo específico de conhecimento.',
            'Passei a minha vida inteira procurando a resposta para uma determinada pergunta.',
            'Vendi minha alma por conhecimento. Espero fazer grandes feitos e conquistá-la de volta.',
            'Sou leal ao meu capitão primeiro, e ao resto em segundo lugar.',
            'O navio é o mais importante — companheiros de tripulação e capitães vêm e vão.',
            'Sempre me lembrarei do meu primeiro navio.',
            'Em uma cidade portuária, tenho um amor cujos olhos quase me roubaram do mar.',
            'Fui enganado na minha parte justa dos lucros, e quero receber o que me é devido.',
            'Piratas implacáveis assassinaram meu capitão e companheiros de tripulação, saquearam nosso navio e me deixaram para morrer. A vingança será minha.',
            'Eu daria a minha vida pelas pessoas com quem servi.',
            'Alguém salvou minha vida no campo de batalha. Até hoje, nunca deixarei um amigo para trás.',
            'Minha honra é a minha vida.',
            'Nunca esquecerei a derrota esmagadora que minha companhia sofreu ou os inimigos que a infligiram.',
            'Aqueles que lutam ao meu lado são aqueles por quem vale a pena morrer.',
            'Luto por aqueles que não podem lutar por si mesmos.',
            'Minha vila ou cidade é o meu lar, e lutarei para defendê-la.',
            'Patrocino um orfanato para evitar que outros passem pelo que fui forçado a suportar.',
            'Devo minha sobrevivência a outro garoto de rua que me ensinou a viver nas ruas.',
            'Devo uma dívida que nunca poderei pagar à pessoa que teve pena de mim.',
            'Escapei da minha vida de pobreza roubando uma pessoa importante, e sou procurado por isso.',
            'Ninguém mais vai ter que suportar as dificuldades pelas quais passei.',
        ];

        // Insere todos através do loop único
        foreach ($bonds as $description) {
            Bond::create([
                'description' => $description
            ]);
        }
    }
}