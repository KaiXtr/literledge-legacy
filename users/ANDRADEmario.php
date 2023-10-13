<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ANDRADEmario'");
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

		<?php $user = 'ANDRADEmario'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Mário Raul Morais de Andrade (São Paulo, 9 de outubro de 1893 — São Paulo, 25 de fevereiro de 1945) foi um poeta, escritor, crítico literário, musicólogo, folclorista,  <br />
			ensaísta e fotógrafo brasileiro. Foi um dos pioneiros da poesia moderna brasileira com a publicação de seu livro Pauliceia Desvairada em 1922. Mario exerceu uma grande  <br />
			influência na literatura moderna brasileira e, como ensaísta e estudioso, foi um pioneiro do campo da etnomusicologia. Sua influência transcendeu as fronteiras do Brasil. <br />
			<br />
			Mário foi a figura central do movimento de vanguarda de São Paulo por vinte anos. Músico treinado e mais conhecido como poeta e romancista, Mario de Andrade esteve  <br />
			pessoalmente envolvido em praticamente todas as disciplinas que estiveram relacionadas com o modernismo em São Paulo, tornando-se o polímata nacional do Brasil.  <br />
			Suas fotografias e seus ensaios, que cobriam uma ampla variedade de assuntos, da história à literatura e à música, foram amplamente divulgados na imprensa da época.  <br />
			Andrade foi a força motriz por trás da Semana de Arte Moderna, evento ocorrido em 1922 que reformulou a literatura e as artes visuais no Brasil, tendo sido um dos  <br />
			integrantes do \"Grupo dos Cinco\". As ideias por trás da Semana seriam melhor delineadas no prefácio de seu livro de poesia Pauliceia Desvairada e nos próprios poemas. <br />
			 <br />
			Depois de trabalhar como professor de música e colunista de jornal ele publicou seu maior romance, Macunaíma, em 1928. Mario de Andrade continuou a publicar obras sobre  <br />
			música popular brasileira, poesia e outros temas de forma desigual, sendo interrompido várias vezes devido a seu relacionamento instável com o governo brasileiro.  <br />
			No fim de sua vida, tornou-se o diretor-fundador do Departamento Municipal de Cultura de São Paulo formalizando o papel que ele havia desempenhado durante muito tempo  <br />
			como catalisador da modernidade artística na cidade e no país. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Mário_de_Andrade' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Mário Raul Morais de Andrade (São Paulo, 9 de outubro de 1893 — São Paulo, 25 de fevereiro de 1945) foi um poeta, escritor, crítico literário, musicólogo, folclorista,  <br />
			ensaísta e fotógrafo brasileiro. Foi um dos pioneiros da poesia moderna brasileira com a publicação de seu livro Pauliceia Desvairada em 1922. Mario exerceu uma grande  <br />
			influência na literatura moderna brasileira e, como ensaísta e estudioso, foi um pioneiro do campo da etnomusicologia. Sua influência transcendeu as fronteiras do Brasil. <br />
			<br />
			Mário foi a figura central do movimento de vanguarda de São Paulo por vinte anos. Músico treinado e mais conhecido como poeta e romancista, Mario de Andrade esteve  <br />
			pessoalmente envolvido em praticamente todas as disciplinas que estiveram relacionadas com o modernismo em São Paulo, tornando-se o polímata nacional do Brasil.  <br />
			Suas fotografias e seus ensaios, que cobriam uma ampla variedade de assuntos, da história à literatura e à música, foram amplamente divulgados na imprensa da época.  <br />
			Andrade foi a força motriz por trás da Semana de Arte Moderna, evento ocorrido em 1922 que reformulou a literatura e as artes visuais no Brasil, tendo sido um dos  <br />
			integrantes do \"Grupo dos Cinco\". As ideias por trás da Semana seriam melhor delineadas no prefácio de seu livro de poesia Pauliceia Desvairada e nos próprios poemas. <br />
			 <br />
			Depois de trabalhar como professor de música e colunista de jornal ele publicou seu maior romance, Macunaíma, em 1928. Mario de Andrade continuou a publicar obras sobre  <br />
			música popular brasileira, poesia e outros temas de forma desigual, sendo interrompido várias vezes devido a seu relacionamento instável com o governo brasileiro.  <br />
			No fim de sua vida, tornou-se o diretor-fundador do Departamento Municipal de Cultura de São Paulo formalizando o papel que ele havia desempenhado durante muito tempo  <br />
			como catalisador da modernidade artística na cidade e no país. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Mário_de_Andrade' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Mário Raul Morais de Andrade (São Paulo, 9 de outubro de 1893 — São Paulo, 25 de fevereiro de 1945) foi um poeta, escritor, crítico literário, musicólogo, folclorista,  <br />
			ensaísta e fotógrafo brasileiro. Foi um dos pioneiros da poesia moderna brasileira com a publicação de seu livro Pauliceia Desvairada em 1922. Mario exerceu uma grande  <br />
			influência na literatura moderna brasileira e, como ensaísta e estudioso, foi um pioneiro do campo da etnomusicologia. Sua influência transcendeu as fronteiras do Brasil. <br />
			<br />
			Mário foi a figura central do movimento de vanguarda de São Paulo por vinte anos. Músico treinado e mais conhecido como poeta e romancista, Mario de Andrade esteve  <br />
			pessoalmente envolvido em praticamente todas as disciplinas que estiveram relacionadas com o modernismo em São Paulo, tornando-se o polímata nacional do Brasil.  <br />
			Suas fotografias e seus ensaios, que cobriam uma ampla variedade de assuntos, da história à literatura e à música, foram amplamente divulgados na imprensa da época.  <br />
			Andrade foi a força motriz por trás da Semana de Arte Moderna, evento ocorrido em 1922 que reformulou a literatura e as artes visuais no Brasil, tendo sido um dos  <br />
			integrantes do \"Grupo dos Cinco\". As ideias por trás da Semana seriam melhor delineadas no prefácio de seu livro de poesia Pauliceia Desvairada e nos próprios poemas. <br />
			 <br />
			Depois de trabalhar como professor de música e colunista de jornal ele publicou seu maior romance, Macunaíma, em 1928. Mario de Andrade continuou a publicar obras sobre  <br />
			música popular brasileira, poesia e outros temas de forma desigual, sendo interrompido várias vezes devido a seu relacionamento instável com o governo brasileiro.  <br />
			No fim de sua vida, tornou-se o diretor-fundador do Departamento Municipal de Cultura de São Paulo formalizando o papel que ele havia desempenhado durante muito tempo  <br />
			como catalisador da modernidade artística na cidade e no país. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Mário_de_Andrade' > Wikipedia </a>
			<br />
					";
				}
			?>
			<iframe width='560' height='315' src='https://www.youtube.com/embed/7M_c7kBwtXA?start=141' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
		</div>
		<?php $auctor='ANDRADEmario'; include '../design/poemfind.php'; ?>
		<?php $user = 'ANDRADEmario'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>