<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='DEFOEdaniel'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'];}
				else {$v = $i[$_COOKIE['lang']];}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'DEFOEdaniel'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Daniel Defoe (Londres, 1660 – Londres, 21 de Abril de 1731) foi um escritor e jornalista inglês, famoso pelo seu livro Robinson Crusoé.
			Nasceu em Londres, provavelmente na paróquia de St. Giles Cripplegate. Foi aluno de Charles Morton cujo estilo, juntamente com John Bunyan e da oratória da época, poderá tê-lo influenciado construtivamente. Depois de acabados os estudos, tornou-se comerciante, embora a sua tendência para a especulação não tenha favorecido essa carreira Escreveu panfletos famosos, muitos deles favoráveis a Guilherme III. Fundou e incrementou o jornal periódico The Review quase sozinho, desenvolvendo um trabalho que viria a favorecer a afirmação dos famosos The Tatler e The Spectator.

			Contudo, foi graças a Robinson Crusoe, de 1719, que ficou famoso. Os críticos consideram que a forma moderna do romance nasceu como um texto narrativo, que, partindo das memórias de alguns viajantes, nomeadamente do marinheiro escocês Alexander Selkirk, configura um relato cuja verdade depende sobretudo da acumulação de pormenores concretos.

			Neste romance narra-se a história do único sobrevivente de um naufrágio que o isola numa ilha aparentemente deserta. Assim se figura o percurso de uma personagem que, tudo fazendo para conservar os valores da sua humanidade básica, afirmando-os sobre uma natureza hostil e frequentemente incompreensível, acaba por ser adaptada pela história das ideias como um arquétipo dessa condição.

			Em Moll Flanders de 1722, continuou a problematizar narrativamente os percursos de personagens solitárias e em crise. Uma outra obra significativa é A Journal of the Plague Year, também de 1722, na qual constrói um relato de uma epidemia de peste com admirável e original realismo.

			Quando estava na Escócia, em 1723, escreveu um relato romanceando as aventuras do jacobita fora da lei Rob Roy MacGregor, num artigo intitulado \"Highland Rogue\", o que fez este rapidamente passar a ser uma lenda e um herói para os clãs locais, o que veio atrapalhar muito a politica protestante e da união da Grã-bretanha não tivesse ele sido rapidamente amnistiado.

			Faleceu em 21 de abril de 1731. Encontra-se sepultado em Bunhill Fields Burial Ground.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Daniel_Defoe' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Daniel Defoe (Londres, 1660 – Londres, 21 de Abril de 1731) foi um escritor e jornalista inglês, famoso pelo seu livro Robinson Crusoé.
			Nasceu em Londres, provavelmente na paróquia de St. Giles Cripplegate. Foi aluno de Charles Morton cujo estilo, juntamente com John Bunyan e da oratória da época, poderá tê-lo influenciado construtivamente. Depois de acabados os estudos, tornou-se comerciante, embora a sua tendência para a especulação não tenha favorecido essa carreira Escreveu panfletos famosos, muitos deles favoráveis a Guilherme III. Fundou e incrementou o jornal periódico The Review quase sozinho, desenvolvendo um trabalho que viria a favorecer a afirmação dos famosos The Tatler e The Spectator.

			Contudo, foi graças a Robinson Crusoe, de 1719, que ficou famoso. Os críticos consideram que a forma moderna do romance nasceu como um texto narrativo, que, partindo das memórias de alguns viajantes, nomeadamente do marinheiro escocês Alexander Selkirk, configura um relato cuja verdade depende sobretudo da acumulação de pormenores concretos.

			Neste romance narra-se a história do único sobrevivente de um naufrágio que o isola numa ilha aparentemente deserta. Assim se figura o percurso de uma personagem que, tudo fazendo para conservar os valores da sua humanidade básica, afirmando-os sobre uma natureza hostil e frequentemente incompreensível, acaba por ser adaptada pela história das ideias como um arquétipo dessa condição.

			Em Moll Flanders de 1722, continuou a problematizar narrativamente os percursos de personagens solitárias e em crise. Uma outra obra significativa é A Journal of the Plague Year, também de 1722, na qual constrói um relato de uma epidemia de peste com admirável e original realismo.

			Quando estava na Escócia, em 1723, escreveu um relato romanceando as aventuras do jacobita fora da lei Rob Roy MacGregor, num artigo intitulado \"Highland Rogue\", o que fez este rapidamente passar a ser uma lenda e um herói para os clãs locais, o que veio atrapalhar muito a politica protestante e da união da Grã-bretanha não tivesse ele sido rapidamente amnistiado.

			Faleceu em 21 de abril de 1731. Encontra-se sepultado em Bunhill Fields Burial Ground.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Daniel_Defoe' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Daniel Defoe (Londres, 1660 – Londres, 21 de Abril de 1731) foi um escritor e jornalista inglês, famoso pelo seu livro Robinson Crusoé.
			Nasceu em Londres, provavelmente na paróquia de St. Giles Cripplegate. Foi aluno de Charles Morton cujo estilo, juntamente com John Bunyan e da oratória da época, poderá tê-lo influenciado construtivamente. Depois de acabados os estudos, tornou-se comerciante, embora a sua tendência para a especulação não tenha favorecido essa carreira Escreveu panfletos famosos, muitos deles favoráveis a Guilherme III. Fundou e incrementou o jornal periódico The Review quase sozinho, desenvolvendo um trabalho que viria a favorecer a afirmação dos famosos The Tatler e The Spectator.

			Contudo, foi graças a Robinson Crusoe, de 1719, que ficou famoso. Os críticos consideram que a forma moderna do romance nasceu como um texto narrativo, que, partindo das memórias de alguns viajantes, nomeadamente do marinheiro escocês Alexander Selkirk, configura um relato cuja verdade depende sobretudo da acumulação de pormenores concretos.

			Neste romance narra-se a história do único sobrevivente de um naufrágio que o isola numa ilha aparentemente deserta. Assim se figura o percurso de uma personagem que, tudo fazendo para conservar os valores da sua humanidade básica, afirmando-os sobre uma natureza hostil e frequentemente incompreensível, acaba por ser adaptada pela história das ideias como um arquétipo dessa condição.

			Em Moll Flanders de 1722, continuou a problematizar narrativamente os percursos de personagens solitárias e em crise. Uma outra obra significativa é A Journal of the Plague Year, também de 1722, na qual constrói um relato de uma epidemia de peste com admirável e original realismo.

			Quando estava na Escócia, em 1723, escreveu um relato romanceando as aventuras do jacobita fora da lei Rob Roy MacGregor, num artigo intitulado \"Highland Rogue\", o que fez este rapidamente passar a ser uma lenda e um herói para os clãs locais, o que veio atrapalhar muito a politica protestante e da união da Grã-bretanha não tivesse ele sido rapidamente amnistiado.

			Faleceu em 21 de abril de 1731. Encontra-se sepultado em Bunhill Fields Burial Ground.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Daniel_Defoe' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='DEFOEdaniel'; include '../design/poemfind.php'; ?>
		<?php $user = 'DEFOEdaniel'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>