<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000U'");
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
			<?php $book = '00000U'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As Aventuras de Alice no País das Maravilhas, frequentemente abreviado para Alice no País das Maravilhas (Alice in Wonderland) é a obra infantil mais conhecida de Charles Lutwidge Dodgson, publicada a 4 de julho de 1865 sob o pseudônimo de Lewis Carroll. É uma das obras mais célebres do gênero literário nonsense.

					O livro conta a história de uma menina chamada Alice que cai numa toca de coelho que a transporta para um lugar fantástico povoado por criaturas peculiares e antropomórficas, revelando uma lógica do absurdo, característica dos sonhos. Este está repleto de alusões satíricas dirigidas tanto aos amigos como aos inimigos de Carroll, de paródias a poemas populares infantis ingleses ensinados no século XIX e também de referências linguísticas e matemáticas frequentemente através de enigmas que contribuíram para a sua popularidade. É assim uma obra de difícil interpretação pois contém dois livros num só texto: um para crianças e outro para adultos.

					Este livro possui uma continuação Alice do Outro Lado do Espelho, e ambos influenciam ainda diversas obras como The League of Extraordinary Gentlemen, de Alan Moore e Sandman, de Neil Gaiman.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li>Alice: é a protagonista da história; É racional e corajosa, e vai fazendo considerações à medida que a aventura prossegue. Muitas vezes representada por uma menina de cabelos loiros amarrado por uma faixa amarela, no entanto, sua cor de cabelo não foi especificado na obra. E se popularizou através das primeiras ilustrações da obra literária.</li>
					<li>Coelho Branco (no original em inglês: White Rabbit): é quem inicia a aventura, quando Alice o segue até a toca. Ele carrega um relógio e parece estar muito atrasado para alguma coisa. Em contraste com a Alice, o Coelho Branco tem medo de tudo - da sua rainha, da Alice e das próprias situações onde se encontra. Esta oposição foi pretendida pelo autor para enfatizar os atributos positivos da personalidade principal. E durante o julgamento de um valete de copas (o último capítulo), dá-se uma mudança repentina na covardia, revelando uma vontade de manipular.</li>
					<li>Rato: Revela um grande pavor de gatos e um carácter muito seco quando cita a História com a intenção de secar os animais molhados, deixando-os antes aborrecidos e molhados (terceiro capítulo). Provavelmente foi baseado numa governanta da casa das irmãs Liddell.</li>
					<li>Dodô (no original em inglês: Dodo): É uma caricatura do autor, e este terá usado o nome numa paródia ao modo como ele pronunciava o próprio nome, uma vez que era gago (Do... do... Dodgson); Usa palavras excessivamente complicadas.</li>
					<li>Arara: Personificação da irmã Loriny Liddell.</li>
					<li>Pato (no original em inglês: Duck): É uma caricatura do reverendo Robinson Duckworth, amigo do autor que esteve presente na viagem pelo rio Tâmisa que deu origem à obra presente.</li>
					<li>Aguieta (no original em inglês: Eaglet): Reflexão da irmã Edith Liddell e não entende as palavras muito difíceis.</li>
					<li>Lagarto: É o humilde servo do Coelho Branco que é empurrado por Alice pela chaminé acima (quarto capítulo) e mais tarde é um dos jurados durante o julgamento de um valete de copas (décimo primeiro capítulo). Esta personagem (Bill), pode ser uma brincadeira com o nome do estadista britânico Benjamin Disraeli, pois uma das ilustrações de Tenniel em Alice no Outro Lado do Espelho retrata a personagem referida como o Man in White Paper (quem Alice conhece como um passageiro com quem partilha um trem no comboio), como uma caricatura de Disraeli, usando um chapéu de papel.</li>
					<li>Lagarta (no original em inglês: Caterpillar): Está sentada num cogumelo a fumar calmamente um cachimbo de água. Não presta muita atenção a Alice, respondendo às suas perguntas com monossílabos.</li>
					<li>Duquesa: Muito feia, com um queixo pontiagudo. Concordava com tudo que Alice dizia e procurava incessantemente uma moral para tudo, embora raramente tivesse relação ou sentido (oitavo capítulo).</li>
					<li>Gato de Cheshire ou Gato Risonho: É extremamente independente e consegue desaparecer e aparecer. Carroll obteve o nome na expressão idiomática da língua inglesa sorrir como um gato de Cheshire. Além disso, o gato representado nas figuras de Tenniel é considerado representativo da raça British Shorthair, devido à forma da boca, considerada como um sorriso.</li>
					<li>Chapeleiro Maluco e a Lebre de Março (no original em inglês: Mad Hatter and the March Hare): São figuras retiradas de expressões correntes no período vitoriano da língua inglesa louco como uma Lebre de Março ou louco como um Chapeleiro, devido ao vapor de mercúrio usado na fabricação de feltro que causa transtornos psicóticos[10]; O Chapeleiro Louco é provavelmente uma referência a Teófilo Carter, um conhecido comerciante de móveis em Oxford pelas suas invenções pouco ortodoxas e pelo uso de uma cartola na parte de trás da cabeça à porta da sua loja [11]; São ambos totalmente loucos (como todos os moradores do País das Maravilhas, segundo o Gato Risonho). Estão perpetuamente na hora do chá, porque, segundo eles, o Chapeleiro discutiu no mês de Março com o Tempo e, em vingança, este não muda a hora para os dois habitantes. O Chapeleiro aparentemente teve problemas com a Rainha ao cantar uma música na sua presença, pelo que esta sentenciou a sua decapitação sob o pretexto de estar a matar o Tempo.</li>
					<li>Arganaz (no original em inglês: Dormouse): Está constantemente a dormir e ocasionalmente acorda durante alguns segundos. Conta uma história sobre três irmãs, nomeando-as de Elsie, Lacie e Tillie. Estas são as irmãs Liddell: Elsie é LC (Lorina Charlotte), Tillie é Edith (seu apelido de família é Matilda), e LaCie é um anagrama de Alice.</li>
					<li>Rainha de Copas (no original em inglês: Queen of Hearts): É talvez a caricatura da mãe das irmãs Liddell; É extremamente autoritária e impulsiva, estando constantemente a ordenar aos seus soldados (cartas de baralho) decapitar todos. Porém o Grifo disse que tal é apenas uma fantasia dela, uma vez que depois ninguém morre.</li>
					<li>Valete de Copas: Inicialmente é o criado que transporta a coroa do Rei, mas mais tarde é acusado de roubo de torta (décimo primeiro capítulo).</li>
					<li>Rei de Copas: O rei tem menos influência do que ela, pelo que vive na sombra desta; É talvez a caricatura do pai das irmãs Liddell.</li>
					<li>Grifo: Diz as piores deixas, em contraste à sua antiga linhagem. Provavelmente é uma caricatura dos estudantes do colégio onde leccionava o escritor (é o brasão de armas do Trinity College, em Oxford, e aparece no respectivo portão[10]).</li>
					<li>Tartaruga Fingida (no original em inglês: Mock-Turtle): É uma triste vítima do destino, pois foi em tempos uma tartaruga de verdade que vivia no mar. O nome tem origem na Sopa de Tartaruga Fingida (no original em inglês: Mock-Turtle Soup) vulgar na Inglaterra, sendo um caldo verde feito com cabeça de vitela de modo a imitar sopa de tartaruga[10]. Daí Tenniel ter ilustrado esta figura com uma cabeça de bezerro, cauda e pernas; Esta personagem fala de um professor de Despenho que era um Congro, que costumava ensinar-lhe uma vez por semana Despenho, Destroço e Tintura a Carvão. Esta é uma referência ao crítico de arte John Ruskin, que ia uma vez por semana a casa de Liddell ensinar Desenho e Pintura a óleo às irmãs.[nota 4]; A personagem também cant\"Sopa de Tartaruga\"uma paródia a Bela Estrela (Beautiful Star), que foi executada como um trio por Lorina, Alice e Edith Liddell para Carroll em casa de Liddell, durante o mesmo verão em que foi contada a história de As Aventuras de Alice Debaixo da Terra.</li>
					</ul>
					<hr>
							";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As Aventuras de Alice no País das Maravilhas, frequentemente abreviado para Alice no País das Maravilhas (Alice in Wonderland) é a obra infantil mais conhecida de Charles Lutwidge Dodgson, publicada a 4 de julho de 1865 sob o pseudônimo de Lewis Carroll. É uma das obras mais célebres do gênero literário nonsense.

					O livro conta a história de uma menina chamada Alice que cai numa toca de coelho que a transporta para um lugar fantástico povoado por criaturas peculiares e antropomórficas, revelando uma lógica do absurdo, característica dos sonhos. Este está repleto de alusões satíricas dirigidas tanto aos amigos como aos inimigos de Carroll, de paródias a poemas populares infantis ingleses ensinados no século XIX e também de referências linguísticas e matemáticas frequentemente através de enigmas que contribuíram para a sua popularidade. É assim uma obra de difícil interpretação pois contém dois livros num só texto: um para crianças e outro para adultos.

					Este livro possui uma continuação Alice do Outro Lado do Espelho, e ambos influenciam ainda diversas obras como The League of Extraordinary Gentlemen, de Alan Moore e Sandman, de Neil Gaiman.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li>Alice: é a protagonista da história; É racional e corajosa, e vai fazendo considerações à medida que a aventura prossegue. Muitas vezes representada por uma menina de cabelos loiros amarrado por uma faixa amarela, no entanto, sua cor de cabelo não foi especificado na obra. E se popularizou através das primeiras ilustrações da obra literária.</li>
					<li>Coelho Branco (no original em inglês: White Rabbit): é quem inicia a aventura, quando Alice o segue até a toca. Ele carrega um relógio e parece estar muito atrasado para alguma coisa. Em contraste com a Alice, o Coelho Branco tem medo de tudo - da sua rainha, da Alice e das próprias situações onde se encontra. Esta oposição foi pretendida pelo autor para enfatizar os atributos positivos da personalidade principal. E durante o julgamento de um valete de copas (o último capítulo), dá-se uma mudança repentina na covardia, revelando uma vontade de manipular.</li>
					<li>Rato: Revela um grande pavor de gatos e um carácter muito seco quando cita a História com a intenção de secar os animais molhados, deixando-os antes aborrecidos e molhados (terceiro capítulo). Provavelmente foi baseado numa governanta da casa das irmãs Liddell.</li>
					<li>Dodô (no original em inglês: Dodo): É uma caricatura do autor, e este terá usado o nome numa paródia ao modo como ele pronunciava o próprio nome, uma vez que era gago (Do... do... Dodgson); Usa palavras excessivamente complicadas.</li>
					<li>Arara: Personificação da irmã Loriny Liddell.</li>
					<li>Pato (no original em inglês: Duck): É uma caricatura do reverendo Robinson Duckworth, amigo do autor que esteve presente na viagem pelo rio Tâmisa que deu origem à obra presente.</li>
					<li>Aguieta (no original em inglês: Eaglet): Reflexão da irmã Edith Liddell e não entende as palavras muito difíceis.</li>
					<li>Lagarto: É o humilde servo do Coelho Branco que é empurrado por Alice pela chaminé acima (quarto capítulo) e mais tarde é um dos jurados durante o julgamento de um valete de copas (décimo primeiro capítulo). Esta personagem (Bill), pode ser uma brincadeira com o nome do estadista britânico Benjamin Disraeli, pois uma das ilustrações de Tenniel em Alice no Outro Lado do Espelho retrata a personagem referida como o Man in White Paper (quem Alice conhece como um passageiro com quem partilha um trem no comboio), como uma caricatura de Disraeli, usando um chapéu de papel.</li>
					<li>Lagarta (no original em inglês: Caterpillar): Está sentada num cogumelo a fumar calmamente um cachimbo de água. Não presta muita atenção a Alice, respondendo às suas perguntas com monossílabos.</li>
					<li>Duquesa: Muito feia, com um queixo pontiagudo. Concordava com tudo que Alice dizia e procurava incessantemente uma moral para tudo, embora raramente tivesse relação ou sentido (oitavo capítulo).</li>
					<li>Gato de Cheshire ou Gato Risonho: É extremamente independente e consegue desaparecer e aparecer. Carroll obteve o nome na expressão idiomática da língua inglesa sorrir como um gato de Cheshire. Além disso, o gato representado nas figuras de Tenniel é considerado representativo da raça British Shorthair, devido à forma da boca, considerada como um sorriso.</li>
					<li>Chapeleiro Maluco e a Lebre de Março (no original em inglês: Mad Hatter and the March Hare): São figuras retiradas de expressões correntes no período vitoriano da língua inglesa louco como uma Lebre de Março ou louco como um Chapeleiro, devido ao vapor de mercúrio usado na fabricação de feltro que causa transtornos psicóticos[10]; O Chapeleiro Louco é provavelmente uma referência a Teófilo Carter, um conhecido comerciante de móveis em Oxford pelas suas invenções pouco ortodoxas e pelo uso de uma cartola na parte de trás da cabeça à porta da sua loja [11]; São ambos totalmente loucos (como todos os moradores do País das Maravilhas, segundo o Gato Risonho). Estão perpetuamente na hora do chá, porque, segundo eles, o Chapeleiro discutiu no mês de Março com o Tempo e, em vingança, este não muda a hora para os dois habitantes. O Chapeleiro aparentemente teve problemas com a Rainha ao cantar uma música na sua presença, pelo que esta sentenciou a sua decapitação sob o pretexto de estar a matar o Tempo.</li>
					<li>Arganaz (no original em inglês: Dormouse): Está constantemente a dormir e ocasionalmente acorda durante alguns segundos. Conta uma história sobre três irmãs, nomeando-as de Elsie, Lacie e Tillie. Estas são as irmãs Liddell: Elsie é LC (Lorina Charlotte), Tillie é Edith (seu apelido de família é Matilda), e LaCie é um anagrama de Alice.</li>
					<li>Rainha de Copas (no original em inglês: Queen of Hearts): É talvez a caricatura da mãe das irmãs Liddell; É extremamente autoritária e impulsiva, estando constantemente a ordenar aos seus soldados (cartas de baralho) decapitar todos. Porém o Grifo disse que tal é apenas uma fantasia dela, uma vez que depois ninguém morre.</li>
					<li>Valete de Copas: Inicialmente é o criado que transporta a coroa do Rei, mas mais tarde é acusado de roubo de torta (décimo primeiro capítulo).</li>
					<li>Rei de Copas: O rei tem menos influência do que ela, pelo que vive na sombra desta; É talvez a caricatura do pai das irmãs Liddell.</li>
					<li>Grifo: Diz as piores deixas, em contraste à sua antiga linhagem. Provavelmente é uma caricatura dos estudantes do colégio onde leccionava o escritor (é o brasão de armas do Trinity College, em Oxford, e aparece no respectivo portão[10]).</li>
					<li>Tartaruga Fingida (no original em inglês: Mock-Turtle): É uma triste vítima do destino, pois foi em tempos uma tartaruga de verdade que vivia no mar. O nome tem origem na Sopa de Tartaruga Fingida (no original em inglês: Mock-Turtle Soup) vulgar na Inglaterra, sendo um caldo verde feito com cabeça de vitela de modo a imitar sopa de tartaruga[10]. Daí Tenniel ter ilustrado esta figura com uma cabeça de bezerro, cauda e pernas; Esta personagem fala de um professor de Despenho que era um Congro, que costumava ensinar-lhe uma vez por semana Despenho, Destroço e Tintura a Carvão. Esta é uma referência ao crítico de arte John Ruskin, que ia uma vez por semana a casa de Liddell ensinar Desenho e Pintura a óleo às irmãs.[nota 4]; A personagem também cant\"Sopa de Tartaruga\"uma paródia a Bela Estrela (Beautiful Star), que foi executada como um trio por Lorina, Alice e Edith Liddell para Carroll em casa de Liddell, durante o mesmo verão em que foi contada a história de As Aventuras de Alice Debaixo da Terra.</li>
					</ul>
					<hr>
							";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As Aventuras de Alice no País das Maravilhas, frequentemente abreviado para Alice no País das Maravilhas (Alice in Wonderland) é a obra infantil mais conhecida de Charles Lutwidge Dodgson, publicada a 4 de julho de 1865 sob o pseudônimo de Lewis Carroll. É uma das obras mais célebres do gênero literário nonsense.

					O livro conta a história de uma menina chamada Alice que cai numa toca de coelho que a transporta para um lugar fantástico povoado por criaturas peculiares e antropomórficas, revelando uma lógica do absurdo, característica dos sonhos. Este está repleto de alusões satíricas dirigidas tanto aos amigos como aos inimigos de Carroll, de paródias a poemas populares infantis ingleses ensinados no século XIX e também de referências linguísticas e matemáticas frequentemente através de enigmas que contribuíram para a sua popularidade. É assim uma obra de difícil interpretação pois contém dois livros num só texto: um para crianças e outro para adultos.

					Este livro possui uma continuação Alice do Outro Lado do Espelho, e ambos influenciam ainda diversas obras como The League of Extraordinary Gentlemen, de Alan Moore e Sandman, de Neil Gaiman.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li>Alice: é a protagonista da história; É racional e corajosa, e vai fazendo considerações à medida que a aventura prossegue. Muitas vezes representada por uma menina de cabelos loiros amarrado por uma faixa amarela, no entanto, sua cor de cabelo não foi especificado na obra. E se popularizou através das primeiras ilustrações da obra literária.</li>
					<li>Coelho Branco (no original em inglês: White Rabbit): é quem inicia a aventura, quando Alice o segue até a toca. Ele carrega um relógio e parece estar muito atrasado para alguma coisa. Em contraste com a Alice, o Coelho Branco tem medo de tudo - da sua rainha, da Alice e das próprias situações onde se encontra. Esta oposição foi pretendida pelo autor para enfatizar os atributos positivos da personalidade principal. E durante o julgamento de um valete de copas (o último capítulo), dá-se uma mudança repentina na covardia, revelando uma vontade de manipular.</li>
					<li>Rato: Revela um grande pavor de gatos e um carácter muito seco quando cita a História com a intenção de secar os animais molhados, deixando-os antes aborrecidos e molhados (terceiro capítulo). Provavelmente foi baseado numa governanta da casa das irmãs Liddell.</li>
					<li>Dodô (no original em inglês: Dodo): É uma caricatura do autor, e este terá usado o nome numa paródia ao modo como ele pronunciava o próprio nome, uma vez que era gago (Do... do... Dodgson); Usa palavras excessivamente complicadas.</li>
					<li>Arara: Personificação da irmã Loriny Liddell.</li>
					<li>Pato (no original em inglês: Duck): É uma caricatura do reverendo Robinson Duckworth, amigo do autor que esteve presente na viagem pelo rio Tâmisa que deu origem à obra presente.</li>
					<li>Aguieta (no original em inglês: Eaglet): Reflexão da irmã Edith Liddell e não entende as palavras muito difíceis.</li>
					<li>Lagarto: É o humilde servo do Coelho Branco que é empurrado por Alice pela chaminé acima (quarto capítulo) e mais tarde é um dos jurados durante o julgamento de um valete de copas (décimo primeiro capítulo). Esta personagem (Bill), pode ser uma brincadeira com o nome do estadista britânico Benjamin Disraeli, pois uma das ilustrações de Tenniel em Alice no Outro Lado do Espelho retrata a personagem referida como o Man in White Paper (quem Alice conhece como um passageiro com quem partilha um trem no comboio), como uma caricatura de Disraeli, usando um chapéu de papel.</li>
					<li>Lagarta (no original em inglês: Caterpillar): Está sentada num cogumelo a fumar calmamente um cachimbo de água. Não presta muita atenção a Alice, respondendo às suas perguntas com monossílabos.</li>
					<li>Duquesa: Muito feia, com um queixo pontiagudo. Concordava com tudo que Alice dizia e procurava incessantemente uma moral para tudo, embora raramente tivesse relação ou sentido (oitavo capítulo).</li>
					<li>Gato de Cheshire ou Gato Risonho: É extremamente independente e consegue desaparecer e aparecer. Carroll obteve o nome na expressão idiomática da língua inglesa sorrir como um gato de Cheshire. Além disso, o gato representado nas figuras de Tenniel é considerado representativo da raça British Shorthair, devido à forma da boca, considerada como um sorriso.</li>
					<li>Chapeleiro Maluco e a Lebre de Março (no original em inglês: Mad Hatter and the March Hare): São figuras retiradas de expressões correntes no período vitoriano da língua inglesa louco como uma Lebre de Março ou louco como um Chapeleiro, devido ao vapor de mercúrio usado na fabricação de feltro que causa transtornos psicóticos[10]; O Chapeleiro Louco é provavelmente uma referência a Teófilo Carter, um conhecido comerciante de móveis em Oxford pelas suas invenções pouco ortodoxas e pelo uso de uma cartola na parte de trás da cabeça à porta da sua loja [11]; São ambos totalmente loucos (como todos os moradores do País das Maravilhas, segundo o Gato Risonho). Estão perpetuamente na hora do chá, porque, segundo eles, o Chapeleiro discutiu no mês de Março com o Tempo e, em vingança, este não muda a hora para os dois habitantes. O Chapeleiro aparentemente teve problemas com a Rainha ao cantar uma música na sua presença, pelo que esta sentenciou a sua decapitação sob o pretexto de estar a matar o Tempo.</li>
					<li>Arganaz (no original em inglês: Dormouse): Está constantemente a dormir e ocasionalmente acorda durante alguns segundos. Conta uma história sobre três irmãs, nomeando-as de Elsie, Lacie e Tillie. Estas são as irmãs Liddell: Elsie é LC (Lorina Charlotte), Tillie é Edith (seu apelido de família é Matilda), e LaCie é um anagrama de Alice.</li>
					<li>Rainha de Copas (no original em inglês: Queen of Hearts): É talvez a caricatura da mãe das irmãs Liddell; É extremamente autoritária e impulsiva, estando constantemente a ordenar aos seus soldados (cartas de baralho) decapitar todos. Porém o Grifo disse que tal é apenas uma fantasia dela, uma vez que depois ninguém morre.</li>
					<li>Valete de Copas: Inicialmente é o criado que transporta a coroa do Rei, mas mais tarde é acusado de roubo de torta (décimo primeiro capítulo).</li>
					<li>Rei de Copas: O rei tem menos influência do que ela, pelo que vive na sombra desta; É talvez a caricatura do pai das irmãs Liddell.</li>
					<li>Grifo: Diz as piores deixas, em contraste à sua antiga linhagem. Provavelmente é uma caricatura dos estudantes do colégio onde leccionava o escritor (é o brasão de armas do Trinity College, em Oxford, e aparece no respectivo portão[10]).</li>
					<li>Tartaruga Fingida (no original em inglês: Mock-Turtle): É uma triste vítima do destino, pois foi em tempos uma tartaruga de verdade que vivia no mar. O nome tem origem na Sopa de Tartaruga Fingida (no original em inglês: Mock-Turtle Soup) vulgar na Inglaterra, sendo um caldo verde feito com cabeça de vitela de modo a imitar sopa de tartaruga[10]. Daí Tenniel ter ilustrado esta figura com uma cabeça de bezerro, cauda e pernas; Esta personagem fala de um professor de Despenho que era um Congro, que costumava ensinar-lhe uma vez por semana Despenho, Destroço e Tintura a Carvão. Esta é uma referência ao crítico de arte John Ruskin, que ia uma vez por semana a casa de Liddell ensinar Desenho e Pintura a óleo às irmãs.[nota 4]; A personagem também cant\"Sopa de Tartaruga\"uma paródia a Bela Estrela (Beautiful Star), que foi executada como um trio por Lorina, Alice e Edith Liddell para Carroll em casa de Liddell, durante o mesmo verão em que foi contada a história de As Aventuras de Alice Debaixo da Terra.</li>
					</ul>
					<hr>
							";
					}
				?>
			</div>
			<?php $book = '00000U'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'CARROLLlewis'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>