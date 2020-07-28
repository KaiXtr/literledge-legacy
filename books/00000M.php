<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000M'");
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
			<?php $book = '00000M'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Odisseia (em grego clássico: Οδύσσεια; transl.: Odýsseia) é um dos dois principais poemas épicos da Grécia Antiga, atribuídos a Homero. É uma sequência da Ilíada, outra obra creditada ao autor, e é um poema fundamental no cânone ocidental. Historicamente, é a segunda - a primeira sendo a própria Ilíada - obra da literatura ocidental.

					A Odisseia, assim como a Ilíada, é um poema elaborado ao longo de séculos de tradição oral, tendo tido sua forma fixada por escrito, provavelmente no fim do século VIII a.C. A linguagem homérica combina dialetos diferentes, inclusive com reminiscências antigas do idioma grego, resultando, por isso, numa língua artificial, porém compreendida. Composto em hexâmetro dactílico era cantado pelo aedo (cantor), que também tocava, acompanhando, a cítara ou fórminx, como consta na própria Odisseia (canto VIII, versos 43-92) e também na Ilíada (canto IX, versos 187-190).

					O poema relata o regresso de Odisseu, (ou Ulisses, como era chamado no mito romano), herói da Guerra de Troia e protagonista que dá nome à obra. Como se diz na proposição, é a história do “herói de mil estratagemas que tanto vagueou, depois de ter destruído a cidadela sagrada de Troia, que viu cidades e conheceu costumes de muitos homens e que no mar padeceu mil tormentos, quanto lutava pela vida e pelo regresso dos seus companheiros”. Odisseu leva dez anos para chegar à sua terra natal, Ítaca, depois da Guerra de Troia, que também havia durado dez anos.

					A trama da narrativa, surpreendentemente moderna na sua não-linearidade, apresenta a originalidade de só conservar elementos concretos, diretos, que se encadeiam no poema sem análises nem comentários. A análise psicológica, a análise do mundo interior, não era ainda praticada. As personagens agem ou falam; ou então, falam e agem. E falam no discurso direto, diante de nós, para nós – preparando, de alguma forma, o teatro. Os eventos narrados dependem tanto das escolhas feitas por mulheres, criados e escravos quanto dos guerreiros.

					A influência homérica é clara em obras como a Eneida, de Virgílio, Os Lusíadas, de Camões, ou Ulysses, de James Joyce, mas não se limita aos clássicos. As aventuras de Ulisses, a superação desesperada dos perigos, nas ameaças que lhe surgem na luta pela sobrevivência, são a matriz de grande parte das narrativas modernas, desde a literatura ao cinema.

					Em português, bem como em diversos outros idiomas, a palavra odisseia passou a referir qualquer viagem longa, especialmente se apresentar características épicas.

					A Odisseia se inicia in medias res (latim para \"no meio das coisas\"), com sua trama já inserida no meio de uma história mais ampla, e com os eventos anteriores sendo descritos ou através de flashbacks ou de narrativas dentro da própria história. O dispositivo foi imitado por diversos autores de épicos literários posteriores, como por exemplo Virgílio, na Eneida, bem como poetas modernos como Alexander Pope em The Rape of the Lock.

					A ação está repartida em três tempos principais: situação de Penélope e Telêmaco em Ítaca e viagem de Telêmaco; chegada de Odisseu ao país dos feaces, onde narra as suas aventuras (recuo da ação, em vários anos); regresso de Ulisses a Ítaca e morte dos pretendentes.

					Perante a presunção da morte de Ulisses, a sua esposa Penélope e o seu filho, Telêmaco são obrigados a lidar com um grupo de insolentes pretendentes, os Mnesteres (em grego: Μνηστῆρες) ou Proci, que competem pela mão de Penélope em casamento. Telêmaco tenta assumir o controle da sua casa e aconselhado por Atena, viaja em busca de notícias do seu pai desaparecido.

					A cena então muda: Odisseu é cativo da bela ninfa Calipso, com quem ele passou sete dos dez anos em que esteve perdido. Após ser libertado pela intercessão de sua padroeira, a deusa Atena, ele parte. Porém, a sua jangada é destruída por Posídon, furioso por Odisseu ter cegado o seu filho, Polifemo. Quando Odisseu alcança a praia de Esquéria, lar dos feácios, é auxiliado pela jovem Nausícaa, de quem recebe hospitalidade; em troca, satisfaz a curiosidade dos feácios, narrando a eles - e ao leitor - as suas aventuras desde a partida de Troia. Os feácios, hábeis construtores de navios, emprestam-lhe uma embarcação para que ele regresse a Ítaca, onde recebe a ajuda do pastor de porcos Eumeu, se encontra com Telêmaco e reconquista o seu lar, reencontrando a sua esposa, Penélope e matando os seus pretendentes.

					Quase todas as edições e traduções modernas da Odisseia são divididas em 24 livros. Esta divisão é conveniente, porém não é original; foi desenvolvida pelos editores alexandrinos do século III a.C. No período clássico diversos dos livros (individualmente e em conjunto) recebiam seus próprios títulos; os primeiros quatro, que se concentravam em Telêmaco, eram comumente conhecidos como a Telemaquia; a narrativa de Odisseu, no livro 9, que contém seu encontro com o ciclope Polifemo, era tradicionalmente chamada de Ciclopeia; e o livro 11, que descreve seu encontro com os espíritos dos mortos no Hades, era conhecido como Néquia. Os livros 9 a 12, onde Odisseu reconta suas aventuras para seus anfitriões feácios eram referidos como os Apólogos, as \"histórias\" de Odisseu. O livro 22, no qual Odisseu mata todos os pretendentes, recebia o título de Mnesterofonia, o \"massacre dos pretendentes\".

					Os últimos 548 versos da Odisseia, que correspondem ao livro 24, são tidas por muitos acadêmicos como uma adição feita por um poeta posterior; diversas passagens dos livros anteriores parecem preparar para os eventos que ocorrem nele, portanto se de fato forem uma adição posterior, o editor responsável teria alterado algum texto antigo já existente (para as diversas visões a respeito da origem, autoria e unidade do poema, veja escolástica homérica).

					O Ministério da Cultura grego anunciou dia 10 de julho de 2018, que foi encontrada em Olímpia, no Peloponeso, uma placa com 13 versos de uma apsódia da Odisseia gravados, que poderia ser uma das inscrições mais antigas do famoso poema épico de Homero.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					Odisseu (conhecido também pela forma latina, Ulisses), herói da guerra de Troia e que quer voltar para junto dos seus familiares;
					Penélope, esposa de Odisseu, prima de Helena de Troia;
					Telémaco, filho de Odisseu e Penélope;
					Laerte, rei de Ítaca e pai de Odisseu, de onde vem o epíteto \"Laércio\", o mais usado para se referir a seu filho ao longo da obra;
					Eumeu, porqueiro;
					Euricleia, fâmula de Odisseu;
					Antinoo, um dos pretendentes e o mais maligno;
					Eurimaco, um dos pretendentes, imitador de Antinoo.
					Casa dos Feácios
					Alcínoo, rei dos feácios;
					Areta de Cirene, esposa de Alcínoo;
					Nausícaa, princesa dos Feácios;
					Laodamante, irmão de Nausícaa, desafiador de Odisseu nos jogos;
					Hálio, idem;
					Clitóneo, idem;
					Equeneu, velho herói;
					Demódoco, aedo, contador lírico de histórias;
					Pontónoo;
					Anfíloo, atleta;
					Euríalo, atleta, desafiador de Odisseu nos jogos.
					Marinheiros de Odisseu
					Baio
					Euríloco
					Perimedes
					Elpenor
					Antifo
					Deuses intervenientes
					Zeus, rei dos deuses;
					Atena, deusa da sabedoria e estratégia (a favor de Odisseu);
					Circe, a feiticeira, filha do deus Hélio com a mortal Persa (a favor de Odisseu);
					Poseidon, deus dos mares, antagonista principal e maior inimigo de Odisseu;
					Éolo, deus dos ventos, anfitrião de Odisseu e seus amigos em sua ilha;
					Hermes, mensageiro dos deuses;
					Hélio, o deus do sol, de quem os companheiros de Odisseu mataram o gado;
					Calipso ninfa, filha de Atlante, apaixonada por Odisseu;
					Leucoteia, deidade marinha que salva Odisseu de um naufrágio.
					Monstros e criaturas
					Cila, monstro com doze pernas e seis cabeças, cada uma com três fileiras de dentes, habitava o interior de uma gruta cavada no rochedo;
					Ciclopes, (literalmente \"Olho redondo\", \"Olhicircular\") em particular Polifemo (lit. \"que fala muito\", \"Multifalaz\"), filho de Posídon e da ninfa Toosa. Gigante de um olho só, dedicado ao pastoreio e que vive em estado selvagem;
					Caríbdis, monstro das profundezas marinhas que três vezes ao dia sorvia e vomitava a água do mar. Sua morada ficava a curta distância de Cila;
					Hárpias, em Homero, dois monstros com corpo metade mulher e metade pássaro, habitantes de uma ilha na qual há bonança. Com seus cantos, encantam os homens que passem perto, devorando-os depois;
					Lotófagos (\"Comedores de Lótus\"), povo fantástico que vive próximo as regiões da Líbia na África e se alimentam de flores de lótus, a qual provoca certo esquecimento.
					Lestrigões gigantes antropófagos e arremessadores de rochas
					</ul>
					<hr>
							";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Odisseia (em grego clássico: Οδύσσεια; transl.: Odýsseia) é um dos dois principais poemas épicos da Grécia Antiga, atribuídos a Homero. É uma sequência da Ilíada, outra obra creditada ao autor, e é um poema fundamental no cânone ocidental. Historicamente, é a segunda - a primeira sendo a própria Ilíada - obra da literatura ocidental.

					A Odisseia, assim como a Ilíada, é um poema elaborado ao longo de séculos de tradição oral, tendo tido sua forma fixada por escrito, provavelmente no fim do século VIII a.C. A linguagem homérica combina dialetos diferentes, inclusive com reminiscências antigas do idioma grego, resultando, por isso, numa língua artificial, porém compreendida. Composto em hexâmetro dactílico era cantado pelo aedo (cantor), que também tocava, acompanhando, a cítara ou fórminx, como consta na própria Odisseia (canto VIII, versos 43-92) e também na Ilíada (canto IX, versos 187-190).

					O poema relata o regresso de Odisseu, (ou Ulisses, como era chamado no mito romano), herói da Guerra de Troia e protagonista que dá nome à obra. Como se diz na proposição, é a história do “herói de mil estratagemas que tanto vagueou, depois de ter destruído a cidadela sagrada de Troia, que viu cidades e conheceu costumes de muitos homens e que no mar padeceu mil tormentos, quanto lutava pela vida e pelo regresso dos seus companheiros”. Odisseu leva dez anos para chegar à sua terra natal, Ítaca, depois da Guerra de Troia, que também havia durado dez anos.

					A trama da narrativa, surpreendentemente moderna na sua não-linearidade, apresenta a originalidade de só conservar elementos concretos, diretos, que se encadeiam no poema sem análises nem comentários. A análise psicológica, a análise do mundo interior, não era ainda praticada. As personagens agem ou falam; ou então, falam e agem. E falam no discurso direto, diante de nós, para nós – preparando, de alguma forma, o teatro. Os eventos narrados dependem tanto das escolhas feitas por mulheres, criados e escravos quanto dos guerreiros.

					A influência homérica é clara em obras como a Eneida, de Virgílio, Os Lusíadas, de Camões, ou Ulysses, de James Joyce, mas não se limita aos clássicos. As aventuras de Ulisses, a superação desesperada dos perigos, nas ameaças que lhe surgem na luta pela sobrevivência, são a matriz de grande parte das narrativas modernas, desde a literatura ao cinema.

					Em português, bem como em diversos outros idiomas, a palavra odisseia passou a referir qualquer viagem longa, especialmente se apresentar características épicas.

					A Odisseia se inicia in medias res (latim para \"no meio das coisas\"), com sua trama já inserida no meio de uma história mais ampla, e com os eventos anteriores sendo descritos ou através de flashbacks ou de narrativas dentro da própria história. O dispositivo foi imitado por diversos autores de épicos literários posteriores, como por exemplo Virgílio, na Eneida, bem como poetas modernos como Alexander Pope em The Rape of the Lock.

					A ação está repartida em três tempos principais: situação de Penélope e Telêmaco em Ítaca e viagem de Telêmaco; chegada de Odisseu ao país dos feaces, onde narra as suas aventuras (recuo da ação, em vários anos); regresso de Ulisses a Ítaca e morte dos pretendentes.

					Perante a presunção da morte de Ulisses, a sua esposa Penélope e o seu filho, Telêmaco são obrigados a lidar com um grupo de insolentes pretendentes, os Mnesteres (em grego: Μνηστῆρες) ou Proci, que competem pela mão de Penélope em casamento. Telêmaco tenta assumir o controle da sua casa e aconselhado por Atena, viaja em busca de notícias do seu pai desaparecido.

					A cena então muda: Odisseu é cativo da bela ninfa Calipso, com quem ele passou sete dos dez anos em que esteve perdido. Após ser libertado pela intercessão de sua padroeira, a deusa Atena, ele parte. Porém, a sua jangada é destruída por Posídon, furioso por Odisseu ter cegado o seu filho, Polifemo. Quando Odisseu alcança a praia de Esquéria, lar dos feácios, é auxiliado pela jovem Nausícaa, de quem recebe hospitalidade; em troca, satisfaz a curiosidade dos feácios, narrando a eles - e ao leitor - as suas aventuras desde a partida de Troia. Os feácios, hábeis construtores de navios, emprestam-lhe uma embarcação para que ele regresse a Ítaca, onde recebe a ajuda do pastor de porcos Eumeu, se encontra com Telêmaco e reconquista o seu lar, reencontrando a sua esposa, Penélope e matando os seus pretendentes.

					Quase todas as edições e traduções modernas da Odisseia são divididas em 24 livros. Esta divisão é conveniente, porém não é original; foi desenvolvida pelos editores alexandrinos do século III a.C. No período clássico diversos dos livros (individualmente e em conjunto) recebiam seus próprios títulos; os primeiros quatro, que se concentravam em Telêmaco, eram comumente conhecidos como a Telemaquia; a narrativa de Odisseu, no livro 9, que contém seu encontro com o ciclope Polifemo, era tradicionalmente chamada de Ciclopeia; e o livro 11, que descreve seu encontro com os espíritos dos mortos no Hades, era conhecido como Néquia. Os livros 9 a 12, onde Odisseu reconta suas aventuras para seus anfitriões feácios eram referidos como os Apólogos, as \"histórias\" de Odisseu. O livro 22, no qual Odisseu mata todos os pretendentes, recebia o título de Mnesterofonia, o \"massacre dos pretendentes\".

					Os últimos 548 versos da Odisseia, que correspondem ao livro 24, são tidas por muitos acadêmicos como uma adição feita por um poeta posterior; diversas passagens dos livros anteriores parecem preparar para os eventos que ocorrem nele, portanto se de fato forem uma adição posterior, o editor responsável teria alterado algum texto antigo já existente (para as diversas visões a respeito da origem, autoria e unidade do poema, veja escolástica homérica).

					O Ministério da Cultura grego anunciou dia 10 de julho de 2018, que foi encontrada em Olímpia, no Peloponeso, uma placa com 13 versos de uma apsódia da Odisseia gravados, que poderia ser uma das inscrições mais antigas do famoso poema épico de Homero.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					Odisseu (conhecido também pela forma latina, Ulisses), herói da guerra de Troia e que quer voltar para junto dos seus familiares;
					Penélope, esposa de Odisseu, prima de Helena de Troia;
					Telémaco, filho de Odisseu e Penélope;
					Laerte, rei de Ítaca e pai de Odisseu, de onde vem o epíteto \"Laércio\", o mais usado para se referir a seu filho ao longo da obra;
					Eumeu, porqueiro;
					Euricleia, fâmula de Odisseu;
					Antinoo, um dos pretendentes e o mais maligno;
					Eurimaco, um dos pretendentes, imitador de Antinoo.
					Casa dos Feácios
					Alcínoo, rei dos feácios;
					Areta de Cirene, esposa de Alcínoo;
					Nausícaa, princesa dos Feácios;
					Laodamante, irmão de Nausícaa, desafiador de Odisseu nos jogos;
					Hálio, idem;
					Clitóneo, idem;
					Equeneu, velho herói;
					Demódoco, aedo, contador lírico de histórias;
					Pontónoo;
					Anfíloo, atleta;
					Euríalo, atleta, desafiador de Odisseu nos jogos.
					Marinheiros de Odisseu
					Baio
					Euríloco
					Perimedes
					Elpenor
					Antifo
					Deuses intervenientes
					Zeus, rei dos deuses;
					Atena, deusa da sabedoria e estratégia (a favor de Odisseu);
					Circe, a feiticeira, filha do deus Hélio com a mortal Persa (a favor de Odisseu);
					Poseidon, deus dos mares, antagonista principal e maior inimigo de Odisseu;
					Éolo, deus dos ventos, anfitrião de Odisseu e seus amigos em sua ilha;
					Hermes, mensageiro dos deuses;
					Hélio, o deus do sol, de quem os companheiros de Odisseu mataram o gado;
					Calipso ninfa, filha de Atlante, apaixonada por Odisseu;
					Leucoteia, deidade marinha que salva Odisseu de um naufrágio.
					Monstros e criaturas
					Cila, monstro com doze pernas e seis cabeças, cada uma com três fileiras de dentes, habitava o interior de uma gruta cavada no rochedo;
					Ciclopes, (literalmente \"Olho redondo\", \"Olhicircular\") em particular Polifemo (lit. \"que fala muito\", \"Multifalaz\"), filho de Posídon e da ninfa Toosa. Gigante de um olho só, dedicado ao pastoreio e que vive em estado selvagem;
					Caríbdis, monstro das profundezas marinhas que três vezes ao dia sorvia e vomitava a água do mar. Sua morada ficava a curta distância de Cila;
					Hárpias, em Homero, dois monstros com corpo metade mulher e metade pássaro, habitantes de uma ilha na qual há bonança. Com seus cantos, encantam os homens que passem perto, devorando-os depois;
					Lotófagos (\"Comedores de Lótus\"), povo fantástico que vive próximo as regiões da Líbia na África e se alimentam de flores de lótus, a qual provoca certo esquecimento.
					Lestrigões gigantes antropófagos e arremessadores de rochas
					</ul>
					<hr>
							";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Odisseia (em grego clássico: Οδύσσεια; transl.: Odýsseia) é um dos dois principais poemas épicos da Grécia Antiga, atribuídos a Homero. É uma sequência da Ilíada, outra obra creditada ao autor, e é um poema fundamental no cânone ocidental. Historicamente, é a segunda - a primeira sendo a própria Ilíada - obra da literatura ocidental.

					A Odisseia, assim como a Ilíada, é um poema elaborado ao longo de séculos de tradição oral, tendo tido sua forma fixada por escrito, provavelmente no fim do século VIII a.C. A linguagem homérica combina dialetos diferentes, inclusive com reminiscências antigas do idioma grego, resultando, por isso, numa língua artificial, porém compreendida. Composto em hexâmetro dactílico era cantado pelo aedo (cantor), que também tocava, acompanhando, a cítara ou fórminx, como consta na própria Odisseia (canto VIII, versos 43-92) e também na Ilíada (canto IX, versos 187-190).

					O poema relata o regresso de Odisseu, (ou Ulisses, como era chamado no mito romano), herói da Guerra de Troia e protagonista que dá nome à obra. Como se diz na proposição, é a história do “herói de mil estratagemas que tanto vagueou, depois de ter destruído a cidadela sagrada de Troia, que viu cidades e conheceu costumes de muitos homens e que no mar padeceu mil tormentos, quanto lutava pela vida e pelo regresso dos seus companheiros”. Odisseu leva dez anos para chegar à sua terra natal, Ítaca, depois da Guerra de Troia, que também havia durado dez anos.

					A trama da narrativa, surpreendentemente moderna na sua não-linearidade, apresenta a originalidade de só conservar elementos concretos, diretos, que se encadeiam no poema sem análises nem comentários. A análise psicológica, a análise do mundo interior, não era ainda praticada. As personagens agem ou falam; ou então, falam e agem. E falam no discurso direto, diante de nós, para nós – preparando, de alguma forma, o teatro. Os eventos narrados dependem tanto das escolhas feitas por mulheres, criados e escravos quanto dos guerreiros.

					A influência homérica é clara em obras como a Eneida, de Virgílio, Os Lusíadas, de Camões, ou Ulysses, de James Joyce, mas não se limita aos clássicos. As aventuras de Ulisses, a superação desesperada dos perigos, nas ameaças que lhe surgem na luta pela sobrevivência, são a matriz de grande parte das narrativas modernas, desde a literatura ao cinema.

					Em português, bem como em diversos outros idiomas, a palavra odisseia passou a referir qualquer viagem longa, especialmente se apresentar características épicas.

					A Odisseia se inicia in medias res (latim para \"no meio das coisas\"), com sua trama já inserida no meio de uma história mais ampla, e com os eventos anteriores sendo descritos ou através de flashbacks ou de narrativas dentro da própria história. O dispositivo foi imitado por diversos autores de épicos literários posteriores, como por exemplo Virgílio, na Eneida, bem como poetas modernos como Alexander Pope em The Rape of the Lock.

					A ação está repartida em três tempos principais: situação de Penélope e Telêmaco em Ítaca e viagem de Telêmaco; chegada de Odisseu ao país dos feaces, onde narra as suas aventuras (recuo da ação, em vários anos); regresso de Ulisses a Ítaca e morte dos pretendentes.

					Perante a presunção da morte de Ulisses, a sua esposa Penélope e o seu filho, Telêmaco são obrigados a lidar com um grupo de insolentes pretendentes, os Mnesteres (em grego: Μνηστῆρες) ou Proci, que competem pela mão de Penélope em casamento. Telêmaco tenta assumir o controle da sua casa e aconselhado por Atena, viaja em busca de notícias do seu pai desaparecido.

					A cena então muda: Odisseu é cativo da bela ninfa Calipso, com quem ele passou sete dos dez anos em que esteve perdido. Após ser libertado pela intercessão de sua padroeira, a deusa Atena, ele parte. Porém, a sua jangada é destruída por Posídon, furioso por Odisseu ter cegado o seu filho, Polifemo. Quando Odisseu alcança a praia de Esquéria, lar dos feácios, é auxiliado pela jovem Nausícaa, de quem recebe hospitalidade; em troca, satisfaz a curiosidade dos feácios, narrando a eles - e ao leitor - as suas aventuras desde a partida de Troia. Os feácios, hábeis construtores de navios, emprestam-lhe uma embarcação para que ele regresse a Ítaca, onde recebe a ajuda do pastor de porcos Eumeu, se encontra com Telêmaco e reconquista o seu lar, reencontrando a sua esposa, Penélope e matando os seus pretendentes.

					Quase todas as edições e traduções modernas da Odisseia são divididas em 24 livros. Esta divisão é conveniente, porém não é original; foi desenvolvida pelos editores alexandrinos do século III a.C. No período clássico diversos dos livros (individualmente e em conjunto) recebiam seus próprios títulos; os primeiros quatro, que se concentravam em Telêmaco, eram comumente conhecidos como a Telemaquia; a narrativa de Odisseu, no livro 9, que contém seu encontro com o ciclope Polifemo, era tradicionalmente chamada de Ciclopeia; e o livro 11, que descreve seu encontro com os espíritos dos mortos no Hades, era conhecido como Néquia. Os livros 9 a 12, onde Odisseu reconta suas aventuras para seus anfitriões feácios eram referidos como os Apólogos, as \"histórias\" de Odisseu. O livro 22, no qual Odisseu mata todos os pretendentes, recebia o título de Mnesterofonia, o \"massacre dos pretendentes\".

					Os últimos 548 versos da Odisseia, que correspondem ao livro 24, são tidas por muitos acadêmicos como uma adição feita por um poeta posterior; diversas passagens dos livros anteriores parecem preparar para os eventos que ocorrem nele, portanto se de fato forem uma adição posterior, o editor responsável teria alterado algum texto antigo já existente (para as diversas visões a respeito da origem, autoria e unidade do poema, veja escolástica homérica).

					O Ministério da Cultura grego anunciou dia 10 de julho de 2018, que foi encontrada em Olímpia, no Peloponeso, uma placa com 13 versos de uma apsódia da Odisseia gravados, que poderia ser uma das inscrições mais antigas do famoso poema épico de Homero.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					Odisseu (conhecido também pela forma latina, Ulisses), herói da guerra de Troia e que quer voltar para junto dos seus familiares;
					Penélope, esposa de Odisseu, prima de Helena de Troia;
					Telémaco, filho de Odisseu e Penélope;
					Laerte, rei de Ítaca e pai de Odisseu, de onde vem o epíteto \"Laércio\", o mais usado para se referir a seu filho ao longo da obra;
					Eumeu, porqueiro;
					Euricleia, fâmula de Odisseu;
					Antinoo, um dos pretendentes e o mais maligno;
					Eurimaco, um dos pretendentes, imitador de Antinoo.
					Casa dos Feácios
					Alcínoo, rei dos feácios;
					Areta de Cirene, esposa de Alcínoo;
					Nausícaa, princesa dos Feácios;
					Laodamante, irmão de Nausícaa, desafiador de Odisseu nos jogos;
					Hálio, idem;
					Clitóneo, idem;
					Equeneu, velho herói;
					Demódoco, aedo, contador lírico de histórias;
					Pontónoo;
					Anfíloo, atleta;
					Euríalo, atleta, desafiador de Odisseu nos jogos.
					Marinheiros de Odisseu
					Baio
					Euríloco
					Perimedes
					Elpenor
					Antifo
					Deuses intervenientes
					Zeus, rei dos deuses;
					Atena, deusa da sabedoria e estratégia (a favor de Odisseu);
					Circe, a feiticeira, filha do deus Hélio com a mortal Persa (a favor de Odisseu);
					Poseidon, deus dos mares, antagonista principal e maior inimigo de Odisseu;
					Éolo, deus dos ventos, anfitrião de Odisseu e seus amigos em sua ilha;
					Hermes, mensageiro dos deuses;
					Hélio, o deus do sol, de quem os companheiros de Odisseu mataram o gado;
					Calipso ninfa, filha de Atlante, apaixonada por Odisseu;
					Leucoteia, deidade marinha que salva Odisseu de um naufrágio.
					Monstros e criaturas
					Cila, monstro com doze pernas e seis cabeças, cada uma com três fileiras de dentes, habitava o interior de uma gruta cavada no rochedo;
					Ciclopes, (literalmente \"Olho redondo\", \"Olhicircular\") em particular Polifemo (lit. \"que fala muito\", \"Multifalaz\"), filho de Posídon e da ninfa Toosa. Gigante de um olho só, dedicado ao pastoreio e que vive em estado selvagem;
					Caríbdis, monstro das profundezas marinhas que três vezes ao dia sorvia e vomitava a água do mar. Sua morada ficava a curta distância de Cila;
					Hárpias, em Homero, dois monstros com corpo metade mulher e metade pássaro, habitantes de uma ilha na qual há bonança. Com seus cantos, encantam os homens que passem perto, devorando-os depois;
					Lotófagos (\"Comedores de Lótus\"), povo fantástico que vive próximo as regiões da Líbia na África e se alimentam de flores de lótus, a qual provoca certo esquecimento.
					Lestrigões gigantes antropófagos e arremessadores de rochas
					</ul>
					<hr>
							";
					}
				?>
			</div>
			<?php $book = '00000M'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'HOMERUS'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>