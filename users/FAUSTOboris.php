<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='FAUSTOboris'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'FAUSTOboris'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Nascido em uma família de imigrantes judeus, filho de Eva Fausto, nascida na Turquia, e Simon Fausto, na região da Transilvânia, hoje Romênia, frequentou o então chamado curso primário e o ginasial do Colégio Mackenzie e o ciclo colegial do Colégio São Bento. Concluiu, respectivamente, graduação e mestrado em Direito e História pela Universidade de São Paulo.

				Realizou uma carreira profissional paralela como assessor jurídico da USP e como historiador. Sob o último aspecto, desenvolveu pesquisas principalmente sobre a história política do Brasil no período republicano, sobre a imigração em massa para o Brasil, crime e criminalidade em São Paulo, e sobre o pensamento autoritário. [1]

				Escreve freqüentemente artigos para diversos periódicos nacionais, entre eles Piauí[2] e a Folha de S. Paulo.

				Sua principal obra é A Revolução de 1930 - historiografia e história publicada pela primeira vez em 1970 e considerada ainda hoje um clássico das ciências sociais brasileiras, na qual, apesar de ser paulista, Boris Fausto contesta as versões que defendem São Paulo durante a Revolução de 1930 e na Revolução Constitucionalista de 1932. Uma de suas obras mais populares[carece de fontes] é História do Brasil, onde analisa os 500 anos de história brasileira com foco para o ensino médio. Escreveu também Trabalho Urbano e Conflito Social e Crime e Cotidiano.

				Em 1961, casou-se com a educadora e sócia fundadora da Escola Vera Cruz, Cynira Stocco Fausto (1931-2010), com que teve dois filhos, o sociólogo Sérgio Fausto e o antropólogo Carlos Fausto. [3]
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Paulo_Leminski' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='FAUSTOboris'; include '../design/poemfind.php'; ?>
		<?php $user = 'FAUSTOboris'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>