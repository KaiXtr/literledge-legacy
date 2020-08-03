<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000T'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']];
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00000T'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Príncipe (em italiano, Il Principe) é um livro escrito por Nicolau Maquiavel em 1513, cuja primeira edição foi publicada postumamente, em 1532. Trata-se de uma das teorias políticas mais elaboradas pelo pensamento humano e que tem grande influência em descrever o Estado desde a sua publicação até os dias de hoje, mesmo os sistemas de governo já serem variados. No mesmo estilo do Institutio Principis Christiani de Erasmo de Roterdã, o intuito de O Príncipe é descrever as maneiras de conduzir-se nos negócios públicos internos e externos, e fundamentalmente, como conquistar e manter um principado, ou seja, um guia para como se chegar e manter-se no poder.

					Maquiavel deixa de lado o tema de A República que será mais bem discutido nos Discursos sobre a Primeira Década de Tito Lívio. Em vista da situação política italiana no período renascentista, existem teorias [carece de fontes] de que o escritor, tido como republicano, tenha apontado o principado como solução intermediária para unificar a Itália, após o que seria possível a forma republicana.

					O tratado político possui 26 capítulos, além de uma dedicatória a Lourenço II de Médici (1492–1519), Duque de Urbino. Mediante conselhos, sugestões e ponderações realizadas a partir de acontecimentos anteriores na esfera política das principais localidades de então, o livro pretendia ser uma forma de ganhar confiança do duque, que lhe concederia algum cargo. No entanto, Maquiavel não alcançou suas ambições.

					É este livro que sugere a famosa expressã\"os fins justificam os meios\"significando que não importa o que o governante faça em seus domínios, desde que seja para manter-se como autoridade, entretanto a expressão não se encontra no texto, mas tornou-se uma interpretação tradicional do pensamento maquiaveliano. Alguns cursos de administração de empresas fazem leituras aparentemente deturpadas de tal obra, afirmando que, se uma empresa for gerida considerando as metódicas análises do autor, essa conseguiria prosperar no mercado. Nesta obra, Maquiavel defende a centralização do poder político e não propriamente o absolutismo (como muitos pensam [carece de fontes]). Suas considerações e recomendações aos governantes sobre a melhor maneira de administrar o governo caracterizam a obra como uma teoria do Estado moderno.

					Uma leitura apressada ou enviesada de Maquiavel pode levar-nos a entendê-lo como um defensor da falta de ética na política, em qu\"os fins justificam os meios\"Para entender sua teoria, é necessário colocá-lo no contexto da Itália renascentista, em que se lutava contra os particularismos locais. Durante o século XVI, a península Itálica estava dividida em diversos pequenos estados, entre repúblicas, reinos, ducados, além dos Estados Papais. As disputas de poder entre esses territórios era constante, a ponto de os governantes contratarem os serviços de Condottieri (mercenários) com o intuito de obter conquistas territoriais. A obra de Maquiavel revela a consciência diante do perigo da divisão política da península em vários estados, que estariam expostos, à mercê das grandes potências da Europa.

					Entre 1502 e 1503, Maquiavel exerceu o cargo de embaixador junto a César Bórgia, estadista sem escrúpulos e capitão das forças dos Estados Pontifícios. Dominava o governo papal e usava todos os meios para conquistar novas terras e estender o domínio da família Bórgia na Itália. Os cinco meses como embaixador junto a César Bórgia o encheu de admiração.

					A obra “O Príncipe”, escrita por Maquiavel em 1513, e publicada postumamente em 1532, se transformou em sua obra-prima. O livro, um manual sobre a arte de governar, foi inspirado no estilo político de César Bórgia um dos mais ambiciosos comandantes italianos, que ficou conhecido por seu poder e atrocidades que cometeu para conseguir o que queria. Maquiavel viu nele o modelo para os demais governantes da época.

					A obra revela a preocupação de Maquiavel com o momento histórico da Itália, fragilizada pela falta de unidade nacional e alvo de invasões e intrigas diplomáticas. Indignado com a decadência política e moral da Itália, o autor dirige conselhos a um príncipe imaginário, com o único objetivo de unificar a Itália e criar uma nação moderna e poderosa.

					Para Maquiavel, o importante era realizar o desejo projetado, mesmo sob qualquer forma de governo – monarquia ou república, e por qualquer meio, inclusive a violência. Considerava os fatores morais, religiosos e econômicos, que operavam na sociedade como forças que um governante hábil poderia e deveria utilizar para construir um estado nacional forte. Assim, o príncipe com seu exército nacional que substituísse as precárias forças mercenárias, deveria ser capaz de estender seu domínio sobre todas as cidades italianas, acabando com a discórdia.

					Em 1519, anistiado, volta a Florença, sob as graças dos Médici. Em 1520, conseguiu do cardeal Giulio de Médici a função remunerada de escrever a “História de Florença”, um tratado em estilo clássico, que ficou consagrado como a primeira obra da historiografia moderna.

					Em 1526, é encarregado pelo papa Clemente VII de inspecionar as fortificações de Florença e organizar um exército permanente para sua cidade, sob o comando de Giovanni Delle Bande. Em 1527, o saque de Roma pelo imperador Carlos V, do Sacro Império Romano-Germânico, restabeleceu a república em Florença. Maquiavel, visto como favorito dos Médici foi excluído de toda atividade política.

					Nicolau Maquiavel faleceu em Florença, Itália, no dia 22 de julho de 1527. Seu corpo foi sepultado na Igreja da Santa Cruz, em Florença. Morreu sem ver seu sonho realizado, pois a unificação da Itália só se completaria no século XIX.

					Em 1512, quando os Médici derrubaram a República e retomaram o governo de Florença, perdido em 1494, Maquiavel foi destituído de seu cargo e recolhe-se ao exílio voluntário na propriedade de San Casciano, perto de Florença, onde iniciou sua atividade de escritor político, historiador e literato. Em 1513, começou a trabalhar nos “Discursos sobre a Primeira Década de Tito Lívio”, em que faz uma análise da República Romana, e procurou nas experiências do passado uma solução para os problemas da Itália.

					Durante o exílio escreveu também “O Príncipe” (1513), “O Diário em Torno de Nossa Língua” (1516) procurando demonstrar a superioridade do dialeto florentino sobre os demais dialetos da Itália e “A Arte da Guerra”, publicada em 1521, em forma de diálogo, onde expõe as vantagens das milícias nacionais sobre as tropas mercenárias e realiza um exaustivo estudo de estratégia e tática militar
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Príncipe (em italiano, Il Principe) é um livro escrito por Nicolau Maquiavel em 1513, cuja primeira edição foi publicada postumamente, em 1532. Trata-se de uma das teorias políticas mais elaboradas pelo pensamento humano e que tem grande influência em descrever o Estado desde a sua publicação até os dias de hoje, mesmo os sistemas de governo já serem variados. No mesmo estilo do Institutio Principis Christiani de Erasmo de Roterdã, o intuito de O Príncipe é descrever as maneiras de conduzir-se nos negócios públicos internos e externos, e fundamentalmente, como conquistar e manter um principado, ou seja, um guia para como se chegar e manter-se no poder.

					Maquiavel deixa de lado o tema de A República que será mais bem discutido nos Discursos sobre a Primeira Década de Tito Lívio. Em vista da situação política italiana no período renascentista, existem teorias [carece de fontes] de que o escritor, tido como republicano, tenha apontado o principado como solução intermediária para unificar a Itália, após o que seria possível a forma republicana.

					O tratado político possui 26 capítulos, além de uma dedicatória a Lourenço II de Médici (1492–1519), Duque de Urbino. Mediante conselhos, sugestões e ponderações realizadas a partir de acontecimentos anteriores na esfera política das principais localidades de então, o livro pretendia ser uma forma de ganhar confiança do duque, que lhe concederia algum cargo. No entanto, Maquiavel não alcançou suas ambições.

					É este livro que sugere a famosa expressã\"os fins justificam os meios\"significando que não importa o que o governante faça em seus domínios, desde que seja para manter-se como autoridade, entretanto a expressão não se encontra no texto, mas tornou-se uma interpretação tradicional do pensamento maquiaveliano. Alguns cursos de administração de empresas fazem leituras aparentemente deturpadas de tal obra, afirmando que, se uma empresa for gerida considerando as metódicas análises do autor, essa conseguiria prosperar no mercado. Nesta obra, Maquiavel defende a centralização do poder político e não propriamente o absolutismo (como muitos pensam [carece de fontes]). Suas considerações e recomendações aos governantes sobre a melhor maneira de administrar o governo caracterizam a obra como uma teoria do Estado moderno.

					Uma leitura apressada ou enviesada de Maquiavel pode levar-nos a entendê-lo como um defensor da falta de ética na política, em qu\"os fins justificam os meios\"Para entender sua teoria, é necessário colocá-lo no contexto da Itália renascentista, em que se lutava contra os particularismos locais. Durante o século XVI, a península Itálica estava dividida em diversos pequenos estados, entre repúblicas, reinos, ducados, além dos Estados Papais. As disputas de poder entre esses territórios era constante, a ponto de os governantes contratarem os serviços de Condottieri (mercenários) com o intuito de obter conquistas territoriais. A obra de Maquiavel revela a consciência diante do perigo da divisão política da península em vários estados, que estariam expostos, à mercê das grandes potências da Europa.

					Entre 1502 e 1503, Maquiavel exerceu o cargo de embaixador junto a César Bórgia, estadista sem escrúpulos e capitão das forças dos Estados Pontifícios. Dominava o governo papal e usava todos os meios para conquistar novas terras e estender o domínio da família Bórgia na Itália. Os cinco meses como embaixador junto a César Bórgia o encheu de admiração.

					A obra “O Príncipe”, escrita por Maquiavel em 1513, e publicada postumamente em 1532, se transformou em sua obra-prima. O livro, um manual sobre a arte de governar, foi inspirado no estilo político de César Bórgia um dos mais ambiciosos comandantes italianos, que ficou conhecido por seu poder e atrocidades que cometeu para conseguir o que queria. Maquiavel viu nele o modelo para os demais governantes da época.

					A obra revela a preocupação de Maquiavel com o momento histórico da Itália, fragilizada pela falta de unidade nacional e alvo de invasões e intrigas diplomáticas. Indignado com a decadência política e moral da Itália, o autor dirige conselhos a um príncipe imaginário, com o único objetivo de unificar a Itália e criar uma nação moderna e poderosa.

					Para Maquiavel, o importante era realizar o desejo projetado, mesmo sob qualquer forma de governo – monarquia ou república, e por qualquer meio, inclusive a violência. Considerava os fatores morais, religiosos e econômicos, que operavam na sociedade como forças que um governante hábil poderia e deveria utilizar para construir um estado nacional forte. Assim, o príncipe com seu exército nacional que substituísse as precárias forças mercenárias, deveria ser capaz de estender seu domínio sobre todas as cidades italianas, acabando com a discórdia.

					Em 1519, anistiado, volta a Florença, sob as graças dos Médici. Em 1520, conseguiu do cardeal Giulio de Médici a função remunerada de escrever a “História de Florença”, um tratado em estilo clássico, que ficou consagrado como a primeira obra da historiografia moderna.

					Em 1526, é encarregado pelo papa Clemente VII de inspecionar as fortificações de Florença e organizar um exército permanente para sua cidade, sob o comando de Giovanni Delle Bande. Em 1527, o saque de Roma pelo imperador Carlos V, do Sacro Império Romano-Germânico, restabeleceu a república em Florença. Maquiavel, visto como favorito dos Médici foi excluído de toda atividade política.

					Nicolau Maquiavel faleceu em Florença, Itália, no dia 22 de julho de 1527. Seu corpo foi sepultado na Igreja da Santa Cruz, em Florença. Morreu sem ver seu sonho realizado, pois a unificação da Itália só se completaria no século XIX.

					Em 1512, quando os Médici derrubaram a República e retomaram o governo de Florença, perdido em 1494, Maquiavel foi destituído de seu cargo e recolhe-se ao exílio voluntário na propriedade de San Casciano, perto de Florença, onde iniciou sua atividade de escritor político, historiador e literato. Em 1513, começou a trabalhar nos “Discursos sobre a Primeira Década de Tito Lívio”, em que faz uma análise da República Romana, e procurou nas experiências do passado uma solução para os problemas da Itália.

					Durante o exílio escreveu também “O Príncipe” (1513), “O Diário em Torno de Nossa Língua” (1516) procurando demonstrar a superioridade do dialeto florentino sobre os demais dialetos da Itália e “A Arte da Guerra”, publicada em 1521, em forma de diálogo, onde expõe as vantagens das milícias nacionais sobre as tropas mercenárias e realiza um exaustivo estudo de estratégia e tática militar
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Príncipe (em italiano, Il Principe) é um livro escrito por Nicolau Maquiavel em 1513, cuja primeira edição foi publicada postumamente, em 1532. Trata-se de uma das teorias políticas mais elaboradas pelo pensamento humano e que tem grande influência em descrever o Estado desde a sua publicação até os dias de hoje, mesmo os sistemas de governo já serem variados. No mesmo estilo do Institutio Principis Christiani de Erasmo de Roterdã, o intuito de O Príncipe é descrever as maneiras de conduzir-se nos negócios públicos internos e externos, e fundamentalmente, como conquistar e manter um principado, ou seja, um guia para como se chegar e manter-se no poder.

					Maquiavel deixa de lado o tema de A República que será mais bem discutido nos Discursos sobre a Primeira Década de Tito Lívio. Em vista da situação política italiana no período renascentista, existem teorias [carece de fontes] de que o escritor, tido como republicano, tenha apontado o principado como solução intermediária para unificar a Itália, após o que seria possível a forma republicana.

					O tratado político possui 26 capítulos, além de uma dedicatória a Lourenço II de Médici (1492–1519), Duque de Urbino. Mediante conselhos, sugestões e ponderações realizadas a partir de acontecimentos anteriores na esfera política das principais localidades de então, o livro pretendia ser uma forma de ganhar confiança do duque, que lhe concederia algum cargo. No entanto, Maquiavel não alcançou suas ambições.

					É este livro que sugere a famosa expressã\"os fins justificam os meios\"significando que não importa o que o governante faça em seus domínios, desde que seja para manter-se como autoridade, entretanto a expressão não se encontra no texto, mas tornou-se uma interpretação tradicional do pensamento maquiaveliano. Alguns cursos de administração de empresas fazem leituras aparentemente deturpadas de tal obra, afirmando que, se uma empresa for gerida considerando as metódicas análises do autor, essa conseguiria prosperar no mercado. Nesta obra, Maquiavel defende a centralização do poder político e não propriamente o absolutismo (como muitos pensam [carece de fontes]). Suas considerações e recomendações aos governantes sobre a melhor maneira de administrar o governo caracterizam a obra como uma teoria do Estado moderno.

					Uma leitura apressada ou enviesada de Maquiavel pode levar-nos a entendê-lo como um defensor da falta de ética na política, em qu\"os fins justificam os meios\"Para entender sua teoria, é necessário colocá-lo no contexto da Itália renascentista, em que se lutava contra os particularismos locais. Durante o século XVI, a península Itálica estava dividida em diversos pequenos estados, entre repúblicas, reinos, ducados, além dos Estados Papais. As disputas de poder entre esses territórios era constante, a ponto de os governantes contratarem os serviços de Condottieri (mercenários) com o intuito de obter conquistas territoriais. A obra de Maquiavel revela a consciência diante do perigo da divisão política da península em vários estados, que estariam expostos, à mercê das grandes potências da Europa.

					Entre 1502 e 1503, Maquiavel exerceu o cargo de embaixador junto a César Bórgia, estadista sem escrúpulos e capitão das forças dos Estados Pontifícios. Dominava o governo papal e usava todos os meios para conquistar novas terras e estender o domínio da família Bórgia na Itália. Os cinco meses como embaixador junto a César Bórgia o encheu de admiração.

					A obra “O Príncipe”, escrita por Maquiavel em 1513, e publicada postumamente em 1532, se transformou em sua obra-prima. O livro, um manual sobre a arte de governar, foi inspirado no estilo político de César Bórgia um dos mais ambiciosos comandantes italianos, que ficou conhecido por seu poder e atrocidades que cometeu para conseguir o que queria. Maquiavel viu nele o modelo para os demais governantes da época.

					A obra revela a preocupação de Maquiavel com o momento histórico da Itália, fragilizada pela falta de unidade nacional e alvo de invasões e intrigas diplomáticas. Indignado com a decadência política e moral da Itália, o autor dirige conselhos a um príncipe imaginário, com o único objetivo de unificar a Itália e criar uma nação moderna e poderosa.

					Para Maquiavel, o importante era realizar o desejo projetado, mesmo sob qualquer forma de governo – monarquia ou república, e por qualquer meio, inclusive a violência. Considerava os fatores morais, religiosos e econômicos, que operavam na sociedade como forças que um governante hábil poderia e deveria utilizar para construir um estado nacional forte. Assim, o príncipe com seu exército nacional que substituísse as precárias forças mercenárias, deveria ser capaz de estender seu domínio sobre todas as cidades italianas, acabando com a discórdia.

					Em 1519, anistiado, volta a Florença, sob as graças dos Médici. Em 1520, conseguiu do cardeal Giulio de Médici a função remunerada de escrever a “História de Florença”, um tratado em estilo clássico, que ficou consagrado como a primeira obra da historiografia moderna.

					Em 1526, é encarregado pelo papa Clemente VII de inspecionar as fortificações de Florença e organizar um exército permanente para sua cidade, sob o comando de Giovanni Delle Bande. Em 1527, o saque de Roma pelo imperador Carlos V, do Sacro Império Romano-Germânico, restabeleceu a república em Florença. Maquiavel, visto como favorito dos Médici foi excluído de toda atividade política.

					Nicolau Maquiavel faleceu em Florença, Itália, no dia 22 de julho de 1527. Seu corpo foi sepultado na Igreja da Santa Cruz, em Florença. Morreu sem ver seu sonho realizado, pois a unificação da Itália só se completaria no século XIX.

					Em 1512, quando os Médici derrubaram a República e retomaram o governo de Florença, perdido em 1494, Maquiavel foi destituído de seu cargo e recolhe-se ao exílio voluntário na propriedade de San Casciano, perto de Florença, onde iniciou sua atividade de escritor político, historiador e literato. Em 1513, começou a trabalhar nos “Discursos sobre a Primeira Década de Tito Lívio”, em que faz uma análise da República Romana, e procurou nas experiências do passado uma solução para os problemas da Itália.

					Durante o exílio escreveu também “O Príncipe” (1513), “O Diário em Torno de Nossa Língua” (1516) procurando demonstrar a superioridade do dialeto florentino sobre os demais dialetos da Itália e “A Arte da Guerra”, publicada em 1521, em forma de diálogo, onde expõe as vantagens das milícias nacionais sobre as tropas mercenárias e realiza um exaustivo estudo de estratégia e tática militar
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00000T'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'MACHIAVELLIniccolo'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>