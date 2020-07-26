<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000N'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']].' - ';
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00000N'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1 name='goto1'> Resenha </h1>
					Les Misérables (Os Miseráveis) é um romance de Victor Hugo publicado em 1862 que deu origem a muitas adaptações, no cinema e muitas outras mídias. Neste romance emblemático da literatura francesa que descreve a vida das pessoas pobres em Paris e na França provincial do século XIX, o autor se concentra mais particularmente no destino do condenado Jean Valjean.

					O romance expõe a filosofia política de Hugo, retratando a desigualdade social e a miséria decorrente, e, por outro lado, o empreendedorismo e o trabalho desempenhando uma função benéfica para o indivíduo e para a sociedade. Retrata também o conflito na relação com o Estado, seja pela ação arbitrária do policial ou pela atitude do revolucionário obcecado pela justiça.[1]

					<hr>
					<a name='goto2'></a>
					<h1 name='goto2'> Personagens </h1>
					<ul>
					Jean Valjean (Senhor Madeleine, Ultime Fauchelevent, Senhor Leblanc, Senhor Jean, nº 24601, nº 9430) — Condenado por roubar um pão, ele é posto em liberdade após dezenove anos de prisão. Rejeitado pela sociedade por ser um ex-presidiário, Bispo Myriel muda sua vida. Ele assume uma nova identidade para seguir uma vida honesta, tornando-se proprietário de uma fábrica e prefeito. Ele adota e cria a filha de Fantine, Cosette, salva Marius da barricada, e morre com uma idade avançada.
					Bienvenu, Bispo de Digne (Charles-François-Bienvenu Myriel) — Um sacerdote idoso e gentil, que é promovido a bispo por um encontro casual com Napoleão. Ele salva Valjean de ser preso após roubar sua prata e o convence a mudar de comportamento. Bienvenu morre com 82 anos, cego.
					Fantine — A costureira parisiense abandonada com uma filha pequena pelo seu amante Félix Tholomyès. Fantine deixa sua filha Cosette aos cuidados dos Thénardiers, estalajadeiros em uma aldeia chamada Montfermeil. Infelizmente, Sra. Thénardier mima suas próprias filhas e abusa de Cosette. Fantine encontra trabalho na fábrica de Madeleine, mas a supervisora descobre que ela é uma mãe solteira e a demite. Para atender às exigências de dinheiro dos Thénardiers, ela vende o seu cabelo, e depois os seus dois dentes da frente e, finalmente, acaba na prostituição. Valjean tem conhecimento de sua situação quando Javert ia prendê-la por atacar um homem que a insultou e atirou neve em suas costas. Ela morre de uma doença que pode ser tuberculose antes que Valjean possa reuni-la com Cosette.
					Cosette (Euphrasie, Cotovia, Ursule, Senhora Pontmercy) — A filha ilegítima de Fantine e Tholomyès. Entre a idade de três a oito anos, ela é espancada e obrigada a trabalhar para os Thénardier. Após a morte de Fantine, Valjean a resgata dos Thénardiers e ela se torna a sua filha adotiva. Ela é educada por freiras do convento Petit-Picpus, em Paris. Mais tarde, ela cresce até tornar-se muito bonita. Ela se apaixona por Marius Pontmercy, e se casa com ele no final do romance.
					Javert — Um inspetor de polícia obsessivo que sempre persegue e perde Valjean. Ele se disfarça por trás da barricada, mas é descoberto e desmascarado. Valjean tem a chance de matar Javert, mas o deixa ir. Mais tarde, Javert permite que Valjean escape. Pela primeira vez, Javert está em uma situação na qual ele desrespeita a lei. Seu conflito interior leva-o a tirar sua própria vida, saltando para o rio Sena.
					Marius Pontmercy — Um aristocrata de segunda geração (não reconhecido como tal porque foi Napoleão que fez o pai de Marius um nobre) que se desentendeu com seu avô monarquista por causa de suas ideias liberais. Estuda direito, se junta aos estudantes revolucionários do ABC e depois se apaixona por Cosette. É o único dos revolucionários dos "Les Amis de L'ABC" a sobreviver à barricada. Acaba por casar com Cosette e fazer as pazes com o seu avô.
					Thénardier (Jondrette, Senhor Fabantou, Senhor Thénard) — Um estalajadeiro corrupto e sua esposa. Eles têm cinco filhos: duas filhas (Éponine e Azelma) e três filhos (Gavroche e dois filhos mais jovens não identificados). Eles cuidam de Cosette em seus primeiros anos, maltratando e abusando dela. Eles também escrevem cartas sobre Cosette a Fantine, a fim de extorquir dinheiro dela. Eles acabam por perder a pousada, devido à falência e se mudam para Paris, vivendo como os Jondrette. Senhor Thénardier está associado com um bando criminoso chamado Patron-Minette, mas ao contrário do que se pensa, ele não é o chefe, pois operam de forma independente. A família Thénardier também vive ao lado de Marius, que reconhece Thénardier como o homem que "salvou" seu pai em Waterloo. Eles são presos por Javert após Marius frustrar suas tentativas de roubar e matar Valjean na casa Gorbeau. No final do romance, com a senhora Thénardier morta na prisão, ele e Azelma viajam aos EUA com a ajuda de Marius, onde Thénardier se torna um traficante de escravos.
					Éponine — Filha mais velha dos Thénardier. Quando criança, ela é mimada por seus pais, mas acaba como uma menina de rua, quando chega à adolescência. Ela participa de crimes de seu pai e elabora esquemas para conseguir dinheiro. Ela é cega de amor por Marius. A pedido de Marius, ela acha o endereço de Cosette para ele e leva-o até lá. Após disfarçar-se de garoto, ela manipula Marius em ir para as barricadas, esperando que eles morram juntos. No entanto, ela salva a vida de Marius, parando com a mão uma bala que o atingiria, e é mortalmente ferida quando a bala atravessa-lhe a mão e as costas. Como ela está morrendo, seu último pedido a Marius é que, uma vez que ela morra, ele a beije na testa. Ele cumpre o seu pedido não porque gostava dela, e sim por piedade.
					Gavroche — O filho mais velho dos Thénardier, que não é amado pelos pais. Ele mora sozinho na rua e é um moleque. Ele rapidamente toma conta de seus dois irmãos mais novos, desconhecendo que estão relacionados a ele. Ele participa das barricadas e é morto durante a recolha de balas dos mortos da Guarda Nacional para os alunos do ABC na barricada.
					Enjolras — O líder dos Amigos do ABC no levante de Paris. Um jovem charmoso e de beleza angelical, ele é apaixonadamente dedicado à democracia, a igualdade e a justiça. Enjolras é um homem de princípios que acredita em uma causa - a criação de uma república, libertando os pobres - sem qualquer dúvida. Ele e Grantaire são executados pela Guarda Nacional após a queda da barricada.
					Secundários
					Baptistine — Irmã do Bispo Myriel. Ela ama e venera o seu irmão.
					Madame Magloire — Empregada doméstica do Bispo e de sua irmã. Ela teme que ele deixe a porta aberta para estranhos.
					Gervais — Um garotinho que deixa cair uma moeda. Existem duas perspectivas sobre o encontro de Jean Valjean com ele. Segundo uma delas, Valjean, ainda um homem de mente criminosa, coloca o pé sobre a moeda e se recusa a devolvê-la ao menino, apesar dos protestos de Gervais. Quando o menino foge de cena e Valjean vem a seus sentidos, lembrando de que o bispo tinha feito por ele, ele sente vergonha do que fez e busca pelo menino, em vão. Outra interpretação desta cena é que Jean Valjean não sabia que ele estava pisando sobre a moeda, mas depois percebe que a moeda estava sob seus pés e se sente horrível.
					Félix Tholomyès — Amante de Fantine e pai biológico de Cosette. Um estudante rico, ele coloca sua própria felicidade e bem-estar acima de qualquer outra coisa. Ele considera seu relacionamento com Fantine como "um caso passageiro" e acaba abandonando-a com uma brincadeira.
					Fauchelevent — Valjean salva a vida de Fauchelevent quando levanta uma carroça debaixo da qual ele estava preso, e depois arruma para ele um emprego como jardineiro num convento em Paris. Fauchelevent mais tarde vai retornar o favor dando abrigo a Valjean e Cosette no convento, e emprestando o seu nome para Valjean.
					Bamatabois — Um dândi que insulta Fantine e coloca neve em suas costas. Ele também é um dos jurados no julgamento do caso Champmathieu.
					Champmathieu — Um vagabundo acusado de roubar uma macieira que é erroneamente confundido com Jean Valjean.
					Irmã Simplice — A freira que cuidou de Fantine em seu leito de morte. Ela engana Javert para proteger Valjean, apesar de sua reputação de nunca ter dito uma mentira em sua vida.
					Boulatruelle — Senhor que trabalhava na estrada de Montfermeil. Acreditava existir um tesouro enterrado na floresta, por ter visto uma noite um homem entrar nela carregando um cofre. O homem era Valjean, que enterrou ali seu dinheiro. Boulatruelle era um forçado liberto, fazia parte do Patron-Minette e participou da emboscada da casa Gorbeau.
					Madre Innocente (Marguerite de Blemeur) — A prioresa do convento Petit-Picpus.
					Senhor Gillenormand — Avô de Marius. Monarquista, ele tenta impedir Marius de ser influenciado por seu pai, um oficial do exército de Napoleão. Discorda fortemente com Marius em assuntos políticos, e eles têm várias discussões. Durante seu conflito perpétuo de ideias, ele não demonstra o seu amor pelo neto.
					Senhorita Gillenormand — Ela vive com o pai, senhor Gillenormand. Sua meia-irmã (a filha de outro casamento de Gillenormand), falecida, era mãe de Marius.
					Coronel Georges Pontmercy — Pai de Marius, e um oficial do exército de Napoleão. Ferido em Waterloo, Pontmercy erroneamente acredita que Thénardier salvou sua vida. Antes de morrer, ele deixa para Marius um bilhete sobre desta grande dívida. Ele amava Marius, e até mesmo o espionava, já que o senhor Gillenormand não lhe permitia visitá-lo.
					Tenente Théodule — Sobrinho favorito de senhorita Gillenormand. Depois que Marius sai de casa, sua tia tenta fazer dele um "substituto" de Marius, sem sucesso.
					Senhor Mabeuf — Um tesoureiro idoso. Ele conhecia o Coronel Pontmercy, e se torna amigo de Marius após a morte do coronel. Ele ajuda Marius a descobrir que seu pai o amava. Ele tem um grande amor por plantas e livros, mas acaba tendo que vendê-los, devido à pobreza. Profundamente deprimido após vender seu último livro, ele se junta aos alunos na insurreição. Ele é baleado e morto no alto das barricadas ao levantar a bandeira vermelha.
					Mãe Plutarque — Empregada do Senhor Mabeuf.
					Amigos do ABC — Um grupo de estudantes revolucionários. Eles lutam e morrem na insurreição de Paris, em 5 e 6 de junho de 1832. Liderados por Enjolras, seus outros principais membros são: Courfeyrac, Combeferre, Jean Prouvaire, Feuilly, Bahorel, Laigle (apelidado de Bossuet, por vezes, também por escrito L'Aigle, Lesgle, Lègle ou Lesgles), Joly e Grantaire.
					Madame Bougon (Mame Burgon) — Governanta do casebre Gorbeau.
					Patron-Minette — Uma gangue de bandidos que auxiliam na emboscada de Thénardier a Valjean e na tentativa de roubo na rua Plumet. O grupo é liderado por Montparnasse, Claquesous, Babet e Gueulemer.
					Magnon — Ex-funcionária de senhor Gillenormand e amiga dos Thénardiers. Ela recebia os pagamentos de pensão alimentícia de Gillenormand para seus dois filhos ilegítimos. Depois que seus filhos morrem em uma epidemia, ela fica com os dois filhos mais novos dos Thénardier, de modo que pudesse proteger sua renda. Os Thénardier recebem uma parte dos pagamentos. Ela é presa por ser supostamente envolvida no roubo Gorbeau.
					Toussaint — Criada de Cosette e Valjean em Paris. Ela é idosa e gagueja.
					Azelma — A filha mais nova dos Thénardier. Junto com sua irmã Éponine, ela é uma criança mimada, e sofre o mesmo destino de pobreza com a família quando ela é mais velha. Ela também participa de crimes de seu pai. Ao contrário de sua irmã, Azelma é dependente e pusilânime. Depois do fracassado assalto a Valjean, ela não é vista novamente até o dia do casamento de Marius e Cosette. No final do romance, Azelma é a única Thénardier que não morre e viaja com seu pai para a América.
					</ul>
					<hr>
					<a name='goto3'></a>
					<h1> Adaptações </h1>
					<ul>
					<li>Le Chemineau (1905) - Albert Capellani</li>
					<li>On the Barricade (1907) - Alice Guy Blache</li>
					<li>Les Misérables (1909) - J. Stuart Blackton</li>
					<li>Candlesticks The Bishop's, (1909) - Edwin S. Porter</li>
					<li>Les Misérables (1911) - Albert Capellani</li>
					<li>Les Misérables (1913) - Albert Capellani</li>
					<li>Candlesticks The Bishop's (1913) - Herbert Brenon</li>
					<li>Les Misérables (1917) - Frank Lloyd</li>
					<li>Les Misérables (1922) - Henry Broughton Parkinson</li>
					<li>AA Mujou (1923), - Kiyohiko Ushihara Ikeda e Yoshinobu</li>
					<li>Les Misérables (1925) - Henri Fescourt</li>
					<li>Candlesticks The Bishop's (1929) - Norman McKinnell</li>
					<li>AA Mujou (1929) - Seika Shiba</li>
					<li>Jean Valjean (1931) - Tomu Uchida</li>
					<li>Les Misérables (1934) - Raymond Bernard</li>
					<li>Os Miseráveis (1935) - Richard Boleslawski</li>
					<li>Gavrosh (1937) - Tatyana Lukashevich</li>
					<li>Kyojinden (1938) - Mansaku Itami</li>
					<li>Los Miserables (1943) - A. Renando Rovero</li>
					<li>El Boassa (1944) - Kamal Selim</li>
					<li>I Miserabili (1948) - Riccardo Freda</li>
					<li>Les Nouveaux misérables (1949) - Henri Verneuil</li>
					<li>Mizeraburu Re: Kami a Akuma (1950) - Daisuke Ito</li>
					<li>Ezai Padum Pado (1950) - K. Ramnoth</li>
					<li>Les Misérables (1952) - Lewis Milestone</li>
					<li>I Miserabili (1952) re-lançamento do filme de 1947</li>
					<li>Kundan (1955) - Sohrab Modi</li>
					<li>Les Misérables (1958) - Jean-Paul Le Chanois</li>
					<li>Os Miseráveis (1958) - Dionísio Azevedo</li>
					<li>Jean Valjean (1961) - Seung-ha Jo</li>
					<li>Cosette (1961) - Alain Boudet</li>
					<li>Gavroche (1962) - Alain Boudet</li>
					<li>Jean Valjean (1963) - Alain Boudet</li>
					<li>1967, minissérie dirigida por Alan Pontes</li>
					<li>Os Miseráveis (1967), filme brasileiro</li>
					<li>Os Miseráveis (1967) novela brasileira adaptada por Walter Negrão e exibida pela Rede Bandeirantes</li>
					<li>Sefiller (1967)</li>
					<li>1972, minissérie francesa dirigida por Marcel Bluwal</li>
					<li>Los Miserables (1973) - Antulio Jimnez Pons</li>
					<li>1978, telefilme do Reino Unido, dirigido por Glenn Jordan e estrelado por: Anthony Perkins, Richard Jordan, John Gielgud, Cyril Cusack e Claude Dauphin</li>
					<li>Al Boasa (1978)</li>
					<li>Les Misérables (1982) - Robert Hossein</li>
					<li>1985, versão televisiva do filme de 1982, que é 30 minutos mais longo e dividido em quatro partes</li>
					<li>Os Miseráveis (1995) - Claude Lelouch</li>
					<li>1995, Les Misérables — The Dream Cast in Concert (musical feito no estilo de concerto)</li>
					<li>Os Miseráveis (1998) - Bille August</li>
					<li>Os Miseráveis (2000), minissérie da TV francesa dirigida por Josée Dayan</li>
					<li>2000, versão inglesa da minissérie francesa de TV de 2000</li>
					<li>Os Miseráveis (2012) - Tom Hooper</li>
					</ul>
					<hr>
							";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1 name='goto1'> Resenha </h1>
					Les Misérables (Os Miseráveis) é um romance de Victor Hugo publicado em 1862 que deu origem a muitas adaptações, no cinema e muitas outras mídias. Neste romance emblemático da literatura francesa que descreve a vida das pessoas pobres em Paris e na França provincial do século XIX, o autor se concentra mais particularmente no destino do condenado Jean Valjean.

					O romance expõe a filosofia política de Hugo, retratando a desigualdade social e a miséria decorrente, e, por outro lado, o empreendedorismo e o trabalho desempenhando uma função benéfica para o indivíduo e para a sociedade. Retrata também o conflito na relação com o Estado, seja pela ação arbitrária do policial ou pela atitude do revolucionário obcecado pela justiça.[1]

					<hr>
					<a name='goto2'></a>
					<h1 name='goto2'> Personagens </h1>
					<ul>
					Jean Valjean (Senhor Madeleine, Ultime Fauchelevent, Senhor Leblanc, Senhor Jean, nº 24601, nº 9430) — Condenado por roubar um pão, ele é posto em liberdade após dezenove anos de prisão. Rejeitado pela sociedade por ser um ex-presidiário, Bispo Myriel muda sua vida. Ele assume uma nova identidade para seguir uma vida honesta, tornando-se proprietário de uma fábrica e prefeito. Ele adota e cria a filha de Fantine, Cosette, salva Marius da barricada, e morre com uma idade avançada.
					Bienvenu, Bispo de Digne (Charles-François-Bienvenu Myriel) — Um sacerdote idoso e gentil, que é promovido a bispo por um encontro casual com Napoleão. Ele salva Valjean de ser preso após roubar sua prata e o convence a mudar de comportamento. Bienvenu morre com 82 anos, cego.
					Fantine — A costureira parisiense abandonada com uma filha pequena pelo seu amante Félix Tholomyès. Fantine deixa sua filha Cosette aos cuidados dos Thénardiers, estalajadeiros em uma aldeia chamada Montfermeil. Infelizmente, Sra. Thénardier mima suas próprias filhas e abusa de Cosette. Fantine encontra trabalho na fábrica de Madeleine, mas a supervisora descobre que ela é uma mãe solteira e a demite. Para atender às exigências de dinheiro dos Thénardiers, ela vende o seu cabelo, e depois os seus dois dentes da frente e, finalmente, acaba na prostituição. Valjean tem conhecimento de sua situação quando Javert ia prendê-la por atacar um homem que a insultou e atirou neve em suas costas. Ela morre de uma doença que pode ser tuberculose antes que Valjean possa reuni-la com Cosette.
					Cosette (Euphrasie, Cotovia, Ursule, Senhora Pontmercy) — A filha ilegítima de Fantine e Tholomyès. Entre a idade de três a oito anos, ela é espancada e obrigada a trabalhar para os Thénardier. Após a morte de Fantine, Valjean a resgata dos Thénardiers e ela se torna a sua filha adotiva. Ela é educada por freiras do convento Petit-Picpus, em Paris. Mais tarde, ela cresce até tornar-se muito bonita. Ela se apaixona por Marius Pontmercy, e se casa com ele no final do romance.
					Javert — Um inspetor de polícia obsessivo que sempre persegue e perde Valjean. Ele se disfarça por trás da barricada, mas é descoberto e desmascarado. Valjean tem a chance de matar Javert, mas o deixa ir. Mais tarde, Javert permite que Valjean escape. Pela primeira vez, Javert está em uma situação na qual ele desrespeita a lei. Seu conflito interior leva-o a tirar sua própria vida, saltando para o rio Sena.
					Marius Pontmercy — Um aristocrata de segunda geração (não reconhecido como tal porque foi Napoleão que fez o pai de Marius um nobre) que se desentendeu com seu avô monarquista por causa de suas ideias liberais. Estuda direito, se junta aos estudantes revolucionários do ABC e depois se apaixona por Cosette. É o único dos revolucionários dos "Les Amis de L'ABC" a sobreviver à barricada. Acaba por casar com Cosette e fazer as pazes com o seu avô.
					Thénardier (Jondrette, Senhor Fabantou, Senhor Thénard) — Um estalajadeiro corrupto e sua esposa. Eles têm cinco filhos: duas filhas (Éponine e Azelma) e três filhos (Gavroche e dois filhos mais jovens não identificados). Eles cuidam de Cosette em seus primeiros anos, maltratando e abusando dela. Eles também escrevem cartas sobre Cosette a Fantine, a fim de extorquir dinheiro dela. Eles acabam por perder a pousada, devido à falência e se mudam para Paris, vivendo como os Jondrette. Senhor Thénardier está associado com um bando criminoso chamado Patron-Minette, mas ao contrário do que se pensa, ele não é o chefe, pois operam de forma independente. A família Thénardier também vive ao lado de Marius, que reconhece Thénardier como o homem que "salvou" seu pai em Waterloo. Eles são presos por Javert após Marius frustrar suas tentativas de roubar e matar Valjean na casa Gorbeau. No final do romance, com a senhora Thénardier morta na prisão, ele e Azelma viajam aos EUA com a ajuda de Marius, onde Thénardier se torna um traficante de escravos.
					Éponine — Filha mais velha dos Thénardier. Quando criança, ela é mimada por seus pais, mas acaba como uma menina de rua, quando chega à adolescência. Ela participa de crimes de seu pai e elabora esquemas para conseguir dinheiro. Ela é cega de amor por Marius. A pedido de Marius, ela acha o endereço de Cosette para ele e leva-o até lá. Após disfarçar-se de garoto, ela manipula Marius em ir para as barricadas, esperando que eles morram juntos. No entanto, ela salva a vida de Marius, parando com a mão uma bala que o atingiria, e é mortalmente ferida quando a bala atravessa-lhe a mão e as costas. Como ela está morrendo, seu último pedido a Marius é que, uma vez que ela morra, ele a beije na testa. Ele cumpre o seu pedido não porque gostava dela, e sim por piedade.
					Gavroche — O filho mais velho dos Thénardier, que não é amado pelos pais. Ele mora sozinho na rua e é um moleque. Ele rapidamente toma conta de seus dois irmãos mais novos, desconhecendo que estão relacionados a ele. Ele participa das barricadas e é morto durante a recolha de balas dos mortos da Guarda Nacional para os alunos do ABC na barricada.
					Enjolras — O líder dos Amigos do ABC no levante de Paris. Um jovem charmoso e de beleza angelical, ele é apaixonadamente dedicado à democracia, a igualdade e a justiça. Enjolras é um homem de princípios que acredita em uma causa - a criação de uma república, libertando os pobres - sem qualquer dúvida. Ele e Grantaire são executados pela Guarda Nacional após a queda da barricada.
					Secundários
					Baptistine — Irmã do Bispo Myriel. Ela ama e venera o seu irmão.
					Madame Magloire — Empregada doméstica do Bispo e de sua irmã. Ela teme que ele deixe a porta aberta para estranhos.
					Gervais — Um garotinho que deixa cair uma moeda. Existem duas perspectivas sobre o encontro de Jean Valjean com ele. Segundo uma delas, Valjean, ainda um homem de mente criminosa, coloca o pé sobre a moeda e se recusa a devolvê-la ao menino, apesar dos protestos de Gervais. Quando o menino foge de cena e Valjean vem a seus sentidos, lembrando de que o bispo tinha feito por ele, ele sente vergonha do que fez e busca pelo menino, em vão. Outra interpretação desta cena é que Jean Valjean não sabia que ele estava pisando sobre a moeda, mas depois percebe que a moeda estava sob seus pés e se sente horrível.
					Félix Tholomyès — Amante de Fantine e pai biológico de Cosette. Um estudante rico, ele coloca sua própria felicidade e bem-estar acima de qualquer outra coisa. Ele considera seu relacionamento com Fantine como "um caso passageiro" e acaba abandonando-a com uma brincadeira.
					Fauchelevent — Valjean salva a vida de Fauchelevent quando levanta uma carroça debaixo da qual ele estava preso, e depois arruma para ele um emprego como jardineiro num convento em Paris. Fauchelevent mais tarde vai retornar o favor dando abrigo a Valjean e Cosette no convento, e emprestando o seu nome para Valjean.
					Bamatabois — Um dândi que insulta Fantine e coloca neve em suas costas. Ele também é um dos jurados no julgamento do caso Champmathieu.
					Champmathieu — Um vagabundo acusado de roubar uma macieira que é erroneamente confundido com Jean Valjean.
					Irmã Simplice — A freira que cuidou de Fantine em seu leito de morte. Ela engana Javert para proteger Valjean, apesar de sua reputação de nunca ter dito uma mentira em sua vida.
					Boulatruelle — Senhor que trabalhava na estrada de Montfermeil. Acreditava existir um tesouro enterrado na floresta, por ter visto uma noite um homem entrar nela carregando um cofre. O homem era Valjean, que enterrou ali seu dinheiro. Boulatruelle era um forçado liberto, fazia parte do Patron-Minette e participou da emboscada da casa Gorbeau.
					Madre Innocente (Marguerite de Blemeur) — A prioresa do convento Petit-Picpus.
					Senhor Gillenormand — Avô de Marius. Monarquista, ele tenta impedir Marius de ser influenciado por seu pai, um oficial do exército de Napoleão. Discorda fortemente com Marius em assuntos políticos, e eles têm várias discussões. Durante seu conflito perpétuo de ideias, ele não demonstra o seu amor pelo neto.
					Senhorita Gillenormand — Ela vive com o pai, senhor Gillenormand. Sua meia-irmã (a filha de outro casamento de Gillenormand), falecida, era mãe de Marius.
					Coronel Georges Pontmercy — Pai de Marius, e um oficial do exército de Napoleão. Ferido em Waterloo, Pontmercy erroneamente acredita que Thénardier salvou sua vida. Antes de morrer, ele deixa para Marius um bilhete sobre desta grande dívida. Ele amava Marius, e até mesmo o espionava, já que o senhor Gillenormand não lhe permitia visitá-lo.
					Tenente Théodule — Sobrinho favorito de senhorita Gillenormand. Depois que Marius sai de casa, sua tia tenta fazer dele um "substituto" de Marius, sem sucesso.
					Senhor Mabeuf — Um tesoureiro idoso. Ele conhecia o Coronel Pontmercy, e se torna amigo de Marius após a morte do coronel. Ele ajuda Marius a descobrir que seu pai o amava. Ele tem um grande amor por plantas e livros, mas acaba tendo que vendê-los, devido à pobreza. Profundamente deprimido após vender seu último livro, ele se junta aos alunos na insurreição. Ele é baleado e morto no alto das barricadas ao levantar a bandeira vermelha.
					Mãe Plutarque — Empregada do Senhor Mabeuf.
					Amigos do ABC — Um grupo de estudantes revolucionários. Eles lutam e morrem na insurreição de Paris, em 5 e 6 de junho de 1832. Liderados por Enjolras, seus outros principais membros são: Courfeyrac, Combeferre, Jean Prouvaire, Feuilly, Bahorel, Laigle (apelidado de Bossuet, por vezes, também por escrito L'Aigle, Lesgle, Lègle ou Lesgles), Joly e Grantaire.
					Madame Bougon (Mame Burgon) — Governanta do casebre Gorbeau.
					Patron-Minette — Uma gangue de bandidos que auxiliam na emboscada de Thénardier a Valjean e na tentativa de roubo na rua Plumet. O grupo é liderado por Montparnasse, Claquesous, Babet e Gueulemer.
					Magnon — Ex-funcionária de senhor Gillenormand e amiga dos Thénardiers. Ela recebia os pagamentos de pensão alimentícia de Gillenormand para seus dois filhos ilegítimos. Depois que seus filhos morrem em uma epidemia, ela fica com os dois filhos mais novos dos Thénardier, de modo que pudesse proteger sua renda. Os Thénardier recebem uma parte dos pagamentos. Ela é presa por ser supostamente envolvida no roubo Gorbeau.
					Toussaint — Criada de Cosette e Valjean em Paris. Ela é idosa e gagueja.
					Azelma — A filha mais nova dos Thénardier. Junto com sua irmã Éponine, ela é uma criança mimada, e sofre o mesmo destino de pobreza com a família quando ela é mais velha. Ela também participa de crimes de seu pai. Ao contrário de sua irmã, Azelma é dependente e pusilânime. Depois do fracassado assalto a Valjean, ela não é vista novamente até o dia do casamento de Marius e Cosette. No final do romance, Azelma é a única Thénardier que não morre e viaja com seu pai para a América.
					</ul>
					<hr>
					<a name='goto3'></a>
					<h1> Adaptações </h1>
					<ul>
					<li>Le Chemineau (1905) - Albert Capellani</li>
					<li>On the Barricade (1907) - Alice Guy Blache</li>
					<li>Les Misérables (1909) - J. Stuart Blackton</li>
					<li>Candlesticks The Bishop's, (1909) - Edwin S. Porter</li>
					<li>Les Misérables (1911) - Albert Capellani</li>
					<li>Les Misérables (1913) - Albert Capellani</li>
					<li>Candlesticks The Bishop's (1913) - Herbert Brenon</li>
					<li>Les Misérables (1917) - Frank Lloyd</li>
					<li>Les Misérables (1922) - Henry Broughton Parkinson</li>
					<li>AA Mujou (1923), - Kiyohiko Ushihara Ikeda e Yoshinobu</li>
					<li>Les Misérables (1925) - Henri Fescourt</li>
					<li>Candlesticks The Bishop's (1929) - Norman McKinnell</li>
					<li>AA Mujou (1929) - Seika Shiba</li>
					<li>Jean Valjean (1931) - Tomu Uchida</li>
					<li>Les Misérables (1934) - Raymond Bernard</li>
					<li>Os Miseráveis (1935) - Richard Boleslawski</li>
					<li>Gavrosh (1937) - Tatyana Lukashevich</li>
					<li>Kyojinden (1938) - Mansaku Itami</li>
					<li>Los Miserables (1943) - A. Renando Rovero</li>
					<li>El Boassa (1944) - Kamal Selim</li>
					<li>I Miserabili (1948) - Riccardo Freda</li>
					<li>Les Nouveaux misérables (1949) - Henri Verneuil</li>
					<li>Mizeraburu Re: Kami a Akuma (1950) - Daisuke Ito</li>
					<li>Ezai Padum Pado (1950) - K. Ramnoth</li>
					<li>Les Misérables (1952) - Lewis Milestone</li>
					<li>I Miserabili (1952) re-lançamento do filme de 1947</li>
					<li>Kundan (1955) - Sohrab Modi</li>
					<li>Les Misérables (1958) - Jean-Paul Le Chanois</li>
					<li>Os Miseráveis (1958) - Dionísio Azevedo</li>
					<li>Jean Valjean (1961) - Seung-ha Jo</li>
					<li>Cosette (1961) - Alain Boudet</li>
					<li>Gavroche (1962) - Alain Boudet</li>
					<li>Jean Valjean (1963) - Alain Boudet</li>
					<li>1967, minissérie dirigida por Alan Pontes</li>
					<li>Os Miseráveis (1967), filme brasileiro</li>
					<li>Os Miseráveis (1967) novela brasileira adaptada por Walter Negrão e exibida pela Rede Bandeirantes</li>
					<li>Sefiller (1967)</li>
					<li>1972, minissérie francesa dirigida por Marcel Bluwal</li>
					<li>Los Miserables (1973) - Antulio Jimnez Pons</li>
					<li>1978, telefilme do Reino Unido, dirigido por Glenn Jordan e estrelado por: Anthony Perkins, Richard Jordan, John Gielgud, Cyril Cusack e Claude Dauphin</li>
					<li>Al Boasa (1978)</li>
					<li>Les Misérables (1982) - Robert Hossein</li>
					<li>1985, versão televisiva do filme de 1982, que é 30 minutos mais longo e dividido em quatro partes</li>
					<li>Os Miseráveis (1995) - Claude Lelouch</li>
					<li>1995, Les Misérables — The Dream Cast in Concert (musical feito no estilo de concerto)</li>
					<li>Os Miseráveis (1998) - Bille August</li>
					<li>Os Miseráveis (2000), minissérie da TV francesa dirigida por Josée Dayan</li>
					<li>2000, versão inglesa da minissérie francesa de TV de 2000</li>
					<li>Os Miseráveis (2012) - Tom Hooper</li>
					</ul>
					<hr>
							";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1 name='goto1'> Resenha </h1>
					Les Misérables (Os Miseráveis) é um romance de Victor Hugo publicado em 1862 que deu origem a muitas adaptações, no cinema e muitas outras mídias. Neste romance emblemático da literatura francesa que descreve a vida das pessoas pobres em Paris e na França provincial do século XIX, o autor se concentra mais particularmente no destino do condenado Jean Valjean.

					O romance expõe a filosofia política de Hugo, retratando a desigualdade social e a miséria decorrente, e, por outro lado, o empreendedorismo e o trabalho desempenhando uma função benéfica para o indivíduo e para a sociedade. Retrata também o conflito na relação com o Estado, seja pela ação arbitrária do policial ou pela atitude do revolucionário obcecado pela justiça.[1]

					<hr>
					<a name='goto2'></a>
					<h1 name='goto2'> Personagens </h1>
					<ul>
					Jean Valjean (Senhor Madeleine, Ultime Fauchelevent, Senhor Leblanc, Senhor Jean, nº 24601, nº 9430) — Condenado por roubar um pão, ele é posto em liberdade após dezenove anos de prisão. Rejeitado pela sociedade por ser um ex-presidiário, Bispo Myriel muda sua vida. Ele assume uma nova identidade para seguir uma vida honesta, tornando-se proprietário de uma fábrica e prefeito. Ele adota e cria a filha de Fantine, Cosette, salva Marius da barricada, e morre com uma idade avançada.
					Bienvenu, Bispo de Digne (Charles-François-Bienvenu Myriel) — Um sacerdote idoso e gentil, que é promovido a bispo por um encontro casual com Napoleão. Ele salva Valjean de ser preso após roubar sua prata e o convence a mudar de comportamento. Bienvenu morre com 82 anos, cego.
					Fantine — A costureira parisiense abandonada com uma filha pequena pelo seu amante Félix Tholomyès. Fantine deixa sua filha Cosette aos cuidados dos Thénardiers, estalajadeiros em uma aldeia chamada Montfermeil. Infelizmente, Sra. Thénardier mima suas próprias filhas e abusa de Cosette. Fantine encontra trabalho na fábrica de Madeleine, mas a supervisora descobre que ela é uma mãe solteira e a demite. Para atender às exigências de dinheiro dos Thénardiers, ela vende o seu cabelo, e depois os seus dois dentes da frente e, finalmente, acaba na prostituição. Valjean tem conhecimento de sua situação quando Javert ia prendê-la por atacar um homem que a insultou e atirou neve em suas costas. Ela morre de uma doença que pode ser tuberculose antes que Valjean possa reuni-la com Cosette.
					Cosette (Euphrasie, Cotovia, Ursule, Senhora Pontmercy) — A filha ilegítima de Fantine e Tholomyès. Entre a idade de três a oito anos, ela é espancada e obrigada a trabalhar para os Thénardier. Após a morte de Fantine, Valjean a resgata dos Thénardiers e ela se torna a sua filha adotiva. Ela é educada por freiras do convento Petit-Picpus, em Paris. Mais tarde, ela cresce até tornar-se muito bonita. Ela se apaixona por Marius Pontmercy, e se casa com ele no final do romance.
					Javert — Um inspetor de polícia obsessivo que sempre persegue e perde Valjean. Ele se disfarça por trás da barricada, mas é descoberto e desmascarado. Valjean tem a chance de matar Javert, mas o deixa ir. Mais tarde, Javert permite que Valjean escape. Pela primeira vez, Javert está em uma situação na qual ele desrespeita a lei. Seu conflito interior leva-o a tirar sua própria vida, saltando para o rio Sena.
					Marius Pontmercy — Um aristocrata de segunda geração (não reconhecido como tal porque foi Napoleão que fez o pai de Marius um nobre) que se desentendeu com seu avô monarquista por causa de suas ideias liberais. Estuda direito, se junta aos estudantes revolucionários do ABC e depois se apaixona por Cosette. É o único dos revolucionários dos "Les Amis de L'ABC" a sobreviver à barricada. Acaba por casar com Cosette e fazer as pazes com o seu avô.
					Thénardier (Jondrette, Senhor Fabantou, Senhor Thénard) — Um estalajadeiro corrupto e sua esposa. Eles têm cinco filhos: duas filhas (Éponine e Azelma) e três filhos (Gavroche e dois filhos mais jovens não identificados). Eles cuidam de Cosette em seus primeiros anos, maltratando e abusando dela. Eles também escrevem cartas sobre Cosette a Fantine, a fim de extorquir dinheiro dela. Eles acabam por perder a pousada, devido à falência e se mudam para Paris, vivendo como os Jondrette. Senhor Thénardier está associado com um bando criminoso chamado Patron-Minette, mas ao contrário do que se pensa, ele não é o chefe, pois operam de forma independente. A família Thénardier também vive ao lado de Marius, que reconhece Thénardier como o homem que "salvou" seu pai em Waterloo. Eles são presos por Javert após Marius frustrar suas tentativas de roubar e matar Valjean na casa Gorbeau. No final do romance, com a senhora Thénardier morta na prisão, ele e Azelma viajam aos EUA com a ajuda de Marius, onde Thénardier se torna um traficante de escravos.
					Éponine — Filha mais velha dos Thénardier. Quando criança, ela é mimada por seus pais, mas acaba como uma menina de rua, quando chega à adolescência. Ela participa de crimes de seu pai e elabora esquemas para conseguir dinheiro. Ela é cega de amor por Marius. A pedido de Marius, ela acha o endereço de Cosette para ele e leva-o até lá. Após disfarçar-se de garoto, ela manipula Marius em ir para as barricadas, esperando que eles morram juntos. No entanto, ela salva a vida de Marius, parando com a mão uma bala que o atingiria, e é mortalmente ferida quando a bala atravessa-lhe a mão e as costas. Como ela está morrendo, seu último pedido a Marius é que, uma vez que ela morra, ele a beije na testa. Ele cumpre o seu pedido não porque gostava dela, e sim por piedade.
					Gavroche — O filho mais velho dos Thénardier, que não é amado pelos pais. Ele mora sozinho na rua e é um moleque. Ele rapidamente toma conta de seus dois irmãos mais novos, desconhecendo que estão relacionados a ele. Ele participa das barricadas e é morto durante a recolha de balas dos mortos da Guarda Nacional para os alunos do ABC na barricada.
					Enjolras — O líder dos Amigos do ABC no levante de Paris. Um jovem charmoso e de beleza angelical, ele é apaixonadamente dedicado à democracia, a igualdade e a justiça. Enjolras é um homem de princípios que acredita em uma causa - a criação de uma república, libertando os pobres - sem qualquer dúvida. Ele e Grantaire são executados pela Guarda Nacional após a queda da barricada.
					Secundários
					Baptistine — Irmã do Bispo Myriel. Ela ama e venera o seu irmão.
					Madame Magloire — Empregada doméstica do Bispo e de sua irmã. Ela teme que ele deixe a porta aberta para estranhos.
					Gervais — Um garotinho que deixa cair uma moeda. Existem duas perspectivas sobre o encontro de Jean Valjean com ele. Segundo uma delas, Valjean, ainda um homem de mente criminosa, coloca o pé sobre a moeda e se recusa a devolvê-la ao menino, apesar dos protestos de Gervais. Quando o menino foge de cena e Valjean vem a seus sentidos, lembrando de que o bispo tinha feito por ele, ele sente vergonha do que fez e busca pelo menino, em vão. Outra interpretação desta cena é que Jean Valjean não sabia que ele estava pisando sobre a moeda, mas depois percebe que a moeda estava sob seus pés e se sente horrível.
					Félix Tholomyès — Amante de Fantine e pai biológico de Cosette. Um estudante rico, ele coloca sua própria felicidade e bem-estar acima de qualquer outra coisa. Ele considera seu relacionamento com Fantine como "um caso passageiro" e acaba abandonando-a com uma brincadeira.
					Fauchelevent — Valjean salva a vida de Fauchelevent quando levanta uma carroça debaixo da qual ele estava preso, e depois arruma para ele um emprego como jardineiro num convento em Paris. Fauchelevent mais tarde vai retornar o favor dando abrigo a Valjean e Cosette no convento, e emprestando o seu nome para Valjean.
					Bamatabois — Um dândi que insulta Fantine e coloca neve em suas costas. Ele também é um dos jurados no julgamento do caso Champmathieu.
					Champmathieu — Um vagabundo acusado de roubar uma macieira que é erroneamente confundido com Jean Valjean.
					Irmã Simplice — A freira que cuidou de Fantine em seu leito de morte. Ela engana Javert para proteger Valjean, apesar de sua reputação de nunca ter dito uma mentira em sua vida.
					Boulatruelle — Senhor que trabalhava na estrada de Montfermeil. Acreditava existir um tesouro enterrado na floresta, por ter visto uma noite um homem entrar nela carregando um cofre. O homem era Valjean, que enterrou ali seu dinheiro. Boulatruelle era um forçado liberto, fazia parte do Patron-Minette e participou da emboscada da casa Gorbeau.
					Madre Innocente (Marguerite de Blemeur) — A prioresa do convento Petit-Picpus.
					Senhor Gillenormand — Avô de Marius. Monarquista, ele tenta impedir Marius de ser influenciado por seu pai, um oficial do exército de Napoleão. Discorda fortemente com Marius em assuntos políticos, e eles têm várias discussões. Durante seu conflito perpétuo de ideias, ele não demonstra o seu amor pelo neto.
					Senhorita Gillenormand — Ela vive com o pai, senhor Gillenormand. Sua meia-irmã (a filha de outro casamento de Gillenormand), falecida, era mãe de Marius.
					Coronel Georges Pontmercy — Pai de Marius, e um oficial do exército de Napoleão. Ferido em Waterloo, Pontmercy erroneamente acredita que Thénardier salvou sua vida. Antes de morrer, ele deixa para Marius um bilhete sobre desta grande dívida. Ele amava Marius, e até mesmo o espionava, já que o senhor Gillenormand não lhe permitia visitá-lo.
					Tenente Théodule — Sobrinho favorito de senhorita Gillenormand. Depois que Marius sai de casa, sua tia tenta fazer dele um "substituto" de Marius, sem sucesso.
					Senhor Mabeuf — Um tesoureiro idoso. Ele conhecia o Coronel Pontmercy, e se torna amigo de Marius após a morte do coronel. Ele ajuda Marius a descobrir que seu pai o amava. Ele tem um grande amor por plantas e livros, mas acaba tendo que vendê-los, devido à pobreza. Profundamente deprimido após vender seu último livro, ele se junta aos alunos na insurreição. Ele é baleado e morto no alto das barricadas ao levantar a bandeira vermelha.
					Mãe Plutarque — Empregada do Senhor Mabeuf.
					Amigos do ABC — Um grupo de estudantes revolucionários. Eles lutam e morrem na insurreição de Paris, em 5 e 6 de junho de 1832. Liderados por Enjolras, seus outros principais membros são: Courfeyrac, Combeferre, Jean Prouvaire, Feuilly, Bahorel, Laigle (apelidado de Bossuet, por vezes, também por escrito L'Aigle, Lesgle, Lègle ou Lesgles), Joly e Grantaire.
					Madame Bougon (Mame Burgon) — Governanta do casebre Gorbeau.
					Patron-Minette — Uma gangue de bandidos que auxiliam na emboscada de Thénardier a Valjean e na tentativa de roubo na rua Plumet. O grupo é liderado por Montparnasse, Claquesous, Babet e Gueulemer.
					Magnon — Ex-funcionária de senhor Gillenormand e amiga dos Thénardiers. Ela recebia os pagamentos de pensão alimentícia de Gillenormand para seus dois filhos ilegítimos. Depois que seus filhos morrem em uma epidemia, ela fica com os dois filhos mais novos dos Thénardier, de modo que pudesse proteger sua renda. Os Thénardier recebem uma parte dos pagamentos. Ela é presa por ser supostamente envolvida no roubo Gorbeau.
					Toussaint — Criada de Cosette e Valjean em Paris. Ela é idosa e gagueja.
					Azelma — A filha mais nova dos Thénardier. Junto com sua irmã Éponine, ela é uma criança mimada, e sofre o mesmo destino de pobreza com a família quando ela é mais velha. Ela também participa de crimes de seu pai. Ao contrário de sua irmã, Azelma é dependente e pusilânime. Depois do fracassado assalto a Valjean, ela não é vista novamente até o dia do casamento de Marius e Cosette. No final do romance, Azelma é a única Thénardier que não morre e viaja com seu pai para a América.
					</ul>
					<hr>
					<a name='goto3'></a>
					<h1> Adaptações </h1>
					<ul>
					<li>Le Chemineau (1905) - Albert Capellani</li>
					<li>On the Barricade (1907) - Alice Guy Blache</li>
					<li>Les Misérables (1909) - J. Stuart Blackton</li>
					<li>Candlesticks The Bishop's, (1909) - Edwin S. Porter</li>
					<li>Les Misérables (1911) - Albert Capellani</li>
					<li>Les Misérables (1913) - Albert Capellani</li>
					<li>Candlesticks The Bishop's (1913) - Herbert Brenon</li>
					<li>Les Misérables (1917) - Frank Lloyd</li>
					<li>Les Misérables (1922) - Henry Broughton Parkinson</li>
					<li>AA Mujou (1923), - Kiyohiko Ushihara Ikeda e Yoshinobu</li>
					<li>Les Misérables (1925) - Henri Fescourt</li>
					<li>Candlesticks The Bishop's (1929) - Norman McKinnell</li>
					<li>AA Mujou (1929) - Seika Shiba</li>
					<li>Jean Valjean (1931) - Tomu Uchida</li>
					<li>Les Misérables (1934) - Raymond Bernard</li>
					<li>Os Miseráveis (1935) - Richard Boleslawski</li>
					<li>Gavrosh (1937) - Tatyana Lukashevich</li>
					<li>Kyojinden (1938) - Mansaku Itami</li>
					<li>Los Miserables (1943) - A. Renando Rovero</li>
					<li>El Boassa (1944) - Kamal Selim</li>
					<li>I Miserabili (1948) - Riccardo Freda</li>
					<li>Les Nouveaux misérables (1949) - Henri Verneuil</li>
					<li>Mizeraburu Re: Kami a Akuma (1950) - Daisuke Ito</li>
					<li>Ezai Padum Pado (1950) - K. Ramnoth</li>
					<li>Les Misérables (1952) - Lewis Milestone</li>
					<li>I Miserabili (1952) re-lançamento do filme de 1947</li>
					<li>Kundan (1955) - Sohrab Modi</li>
					<li>Les Misérables (1958) - Jean-Paul Le Chanois</li>
					<li>Os Miseráveis (1958) - Dionísio Azevedo</li>
					<li>Jean Valjean (1961) - Seung-ha Jo</li>
					<li>Cosette (1961) - Alain Boudet</li>
					<li>Gavroche (1962) - Alain Boudet</li>
					<li>Jean Valjean (1963) - Alain Boudet</li>
					<li>1967, minissérie dirigida por Alan Pontes</li>
					<li>Os Miseráveis (1967), filme brasileiro</li>
					<li>Os Miseráveis (1967) novela brasileira adaptada por Walter Negrão e exibida pela Rede Bandeirantes</li>
					<li>Sefiller (1967)</li>
					<li>1972, minissérie francesa dirigida por Marcel Bluwal</li>
					<li>Los Miserables (1973) - Antulio Jimnez Pons</li>
					<li>1978, telefilme do Reino Unido, dirigido por Glenn Jordan e estrelado por: Anthony Perkins, Richard Jordan, John Gielgud, Cyril Cusack e Claude Dauphin</li>
					<li>Al Boasa (1978)</li>
					<li>Les Misérables (1982) - Robert Hossein</li>
					<li>1985, versão televisiva do filme de 1982, que é 30 minutos mais longo e dividido em quatro partes</li>
					<li>Os Miseráveis (1995) - Claude Lelouch</li>
					<li>1995, Les Misérables — The Dream Cast in Concert (musical feito no estilo de concerto)</li>
					<li>Os Miseráveis (1998) - Bille August</li>
					<li>Os Miseráveis (2000), minissérie da TV francesa dirigida por Josée Dayan</li>
					<li>2000, versão inglesa da minissérie francesa de TV de 2000</li>
					<li>Os Miseráveis (2012) - Tom Hooper</li>
					</ul>
					<hr>
							";
					}
				?>
			</div>
			<?php $book = '00000N'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'HUGOvictor'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>