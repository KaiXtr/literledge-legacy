<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001J'");
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
			<?php $book = '00001J'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Mil Novecentos e Oitenta e Quatro (em inglês: Nineteen Eighty-Four), muitas vezes publicado como 1984, é um romance distópico da autoria do escritor britânico George Orwell e publicado em 1949 .[1][2] O romance é ambientado na \"Pista de Pouso Número 1\" (anteriormente conhecida como Grã-Bretanha), uma província do superestado da Oceania, em um mundo de guerra perpétua, vigilância governamental onipresente e manipulação pública e histórica. Os habitantes deste superestado são ditados por um regime político totalitário eufemisticamente chamado de \"Socialismo Inglês\", encurtado para \"Ingsoc\" na novilíngua, a linguagem inventada pelo governo. O superestado está sob o controle da elite privilegiada do Partido Interno, um partido e um governo que persegue o individualismo e a liberdade de expressão como \"crime de pensamento\", que é aplicado pela \"Polícia do Pensamento\".[3]

					A tirania é ostensivamente supervisionada pelo Grande Irmão, o líder do Partido que goza de um intenso culto de personalidade, mas que talvez sequer exista. O Partido \"busca o poder por seu próprio bem. Não está interessado no bem dos outros, está interessado unicamente no poder\".[4] O protagonista da novela, Winston Smith, é membro do Partido Externo, que Trabalha para o Ministério da Verdade, que é responsável pela propaganda e pelo revisionismo histórico. Seu trabalho é reescrever artigos de jornais do passado, de modo que o registro histórico sempre apoie a ideologia do partido.[5] Grande parte do Ministério também destrói ativamente todos os documentos que não foram editados ou revisados; desta forma, não existe nenhuma prova de que o governo esteja mentindo. Smith é um trabalhador diligente e habilidoso, mas odeia secretamente o Partido e sonha com a rebelião contra o Grande Irmão. A heroína da novela, Julia, é baseada na segunda esposa de Orwell, Sonia Orwell.[6][7]

					Como ficção política literária e ficção científica distópica, Nineteen Eighty-Four é um romance clássico em conteúdo, trama e estilo. Muitos dos seus termos e conceitos, como Grande Irmão, duplipensar, crime de pensamento, novilíngua, buraco da memória, Quarto 101, teletela e 2 + 2 = 5, entraram em uso comum desde sua publicação em 1949. A obra popularizou o adjetivo orwelliano, que descreve o engano oficial, a vigilância secreta e a manipulação da história registrada por um Estado totalitário ou autoritário.[5] Em 2005, o romance foi escolhido pela revista Time como um dos 100 melhores romances da língua inglesa de 1923 a 2005.[8] Foi premiado com um lugar em ambas as listas da Modern Library de 100 melhores romances.[9] Em 2003, o livro foi listado no número 8 na pesquisa da \"The Big Read\" da BBC.[10]
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Mil Novecentos e Oitenta e Quatro (em inglês: Nineteen Eighty-Four), muitas vezes publicado como 1984, é um romance distópico da autoria do escritor britânico George Orwell e publicado em 1949 .[1][2] O romance é ambientado na \"Pista de Pouso Número 1\" (anteriormente conhecida como Grã-Bretanha), uma província do superestado da Oceania, em um mundo de guerra perpétua, vigilância governamental onipresente e manipulação pública e histórica. Os habitantes deste superestado são ditados por um regime político totalitário eufemisticamente chamado de \"Socialismo Inglês\", encurtado para \"Ingsoc\" na novilíngua, a linguagem inventada pelo governo. O superestado está sob o controle da elite privilegiada do Partido Interno, um partido e um governo que persegue o individualismo e a liberdade de expressão como \"crime de pensamento\", que é aplicado pela \"Polícia do Pensamento\".[3]

					A tirania é ostensivamente supervisionada pelo Grande Irmão, o líder do Partido que goza de um intenso culto de personalidade, mas que talvez sequer exista. O Partido \"busca o poder por seu próprio bem. Não está interessado no bem dos outros, está interessado unicamente no poder\".[4] O protagonista da novela, Winston Smith, é membro do Partido Externo, que Trabalha para o Ministério da Verdade, que é responsável pela propaganda e pelo revisionismo histórico. Seu trabalho é reescrever artigos de jornais do passado, de modo que o registro histórico sempre apoie a ideologia do partido.[5] Grande parte do Ministério também destrói ativamente todos os documentos que não foram editados ou revisados; desta forma, não existe nenhuma prova de que o governo esteja mentindo. Smith é um trabalhador diligente e habilidoso, mas odeia secretamente o Partido e sonha com a rebelião contra o Grande Irmão. A heroína da novela, Julia, é baseada na segunda esposa de Orwell, Sonia Orwell.[6][7]

					Como ficção política literária e ficção científica distópica, Nineteen Eighty-Four é um romance clássico em conteúdo, trama e estilo. Muitos dos seus termos e conceitos, como Grande Irmão, duplipensar, crime de pensamento, novilíngua, buraco da memória, Quarto 101, teletela e 2 + 2 = 5, entraram em uso comum desde sua publicação em 1949. A obra popularizou o adjetivo orwelliano, que descreve o engano oficial, a vigilância secreta e a manipulação da história registrada por um Estado totalitário ou autoritário.[5] Em 2005, o romance foi escolhido pela revista Time como um dos 100 melhores romances da língua inglesa de 1923 a 2005.[8] Foi premiado com um lugar em ambas as listas da Modern Library de 100 melhores romances.[9] Em 2003, o livro foi listado no número 8 na pesquisa da \"The Big Read\" da BBC.[10]
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Mil Novecentos e Oitenta e Quatro (em inglês: Nineteen Eighty-Four), muitas vezes publicado como 1984, é um romance distópico da autoria do escritor britânico George Orwell e publicado em 1949 .[1][2] O romance é ambientado na \"Pista de Pouso Número 1\" (anteriormente conhecida como Grã-Bretanha), uma província do superestado da Oceania, em um mundo de guerra perpétua, vigilância governamental onipresente e manipulação pública e histórica. Os habitantes deste superestado são ditados por um regime político totalitário eufemisticamente chamado de \"Socialismo Inglês\", encurtado para \"Ingsoc\" na novilíngua, a linguagem inventada pelo governo. O superestado está sob o controle da elite privilegiada do Partido Interno, um partido e um governo que persegue o individualismo e a liberdade de expressão como \"crime de pensamento\", que é aplicado pela \"Polícia do Pensamento\".[3]

					A tirania é ostensivamente supervisionada pelo Grande Irmão, o líder do Partido que goza de um intenso culto de personalidade, mas que talvez sequer exista. O Partido \"busca o poder por seu próprio bem. Não está interessado no bem dos outros, está interessado unicamente no poder\".[4] O protagonista da novela, Winston Smith, é membro do Partido Externo, que Trabalha para o Ministério da Verdade, que é responsável pela propaganda e pelo revisionismo histórico. Seu trabalho é reescrever artigos de jornais do passado, de modo que o registro histórico sempre apoie a ideologia do partido.[5] Grande parte do Ministério também destrói ativamente todos os documentos que não foram editados ou revisados; desta forma, não existe nenhuma prova de que o governo esteja mentindo. Smith é um trabalhador diligente e habilidoso, mas odeia secretamente o Partido e sonha com a rebelião contra o Grande Irmão. A heroína da novela, Julia, é baseada na segunda esposa de Orwell, Sonia Orwell.[6][7]

					Como ficção política literária e ficção científica distópica, Nineteen Eighty-Four é um romance clássico em conteúdo, trama e estilo. Muitos dos seus termos e conceitos, como Grande Irmão, duplipensar, crime de pensamento, novilíngua, buraco da memória, Quarto 101, teletela e 2 + 2 = 5, entraram em uso comum desde sua publicação em 1949. A obra popularizou o adjetivo orwelliano, que descreve o engano oficial, a vigilância secreta e a manipulação da história registrada por um Estado totalitário ou autoritário.[5] Em 2005, o romance foi escolhido pela revista Time como um dos 100 melhores romances da língua inglesa de 1923 a 2005.[8] Foi premiado com um lugar em ambas as listas da Modern Library de 100 melhores romances.[9] Em 2003, o livro foi listado no número 8 na pesquisa da \"The Big Read\" da BBC.[10]
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001J'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ORWELLgeorge'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>