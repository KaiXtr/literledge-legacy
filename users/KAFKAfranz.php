<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='KAFKAfranz'");
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

		<?php $user = 'KAFKAfranz'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Franz Kafka (Praga, Império Austro-Húngaro, atual República Tcheca, 3 de julho de 1883 — Klosterneuburg, República Austríaca, atual Áustria, <br />
			3 de junho de 1924)[4][5] foi um escritor de língua alemã, autor de romances e contos, considerado pelos críticos como um dos escritores mais influentes <br />
			do século XX. A maior parte de sua obra, como A Metamorfose, O Processo e O Castelo, está repleta de temas e arquétipos de alienação e <br />
			brutalidade física e psicológica, conflito entre pais e filhos, personagens com missões aterrorizantes, labirintos burocráticos e transformações místicas. <br />
			<br />
			Kafka nasceu em uma família judaica de classe média e falante de alemão em Praga, então pertencente ao Império Austro-Húngaro.[6] Durante sua vida, <br />
			a maior parte da população de Praga falava tcheco e a divisão entre os falantes de tcheco e alemão era visível, já que ambos os grupos estavam tentando <br />
			fortalecer sua identidade nacional. A comunidade judaica muitas vezes achou-se dividida entre esses dois grupos, levantando, naturalmente, questões sobre <br />
			a origem de uma pessoa. O próprio Kafka era fluente nas duas línguas, considerando o alemão sua língua materna.[7] <br />
			<br />
			Kafka formou-se em direito e, depois de completar sua educação, conseguiu um emprego em uma companhia de seguros. Começou a escrever contos no seu tempo livre. <br />
			Pelo resto de sua vida, reclamou do pouco tempo que tinha para dedicar-se ao que chegaria a chamar de "seu chamado". Arrependeu-se de ter tido que dedicar <br />
			tanto tempo ao seu "ganha pão". Kafka preferia comunicar-se através de cartas; escreveu centenas de cartas para sua família e amigas próximas, incluindo <br />
			seu pai, sua noiva Felice Bauer e sua irmã mais nova, Ottla Kafka. Tinha uma relação complicada e turbulenta com seu pai, o que teve uma grande influência <br />
			sobre sua escrita. <br />
			<br />
			Apenas algumas das obras de Kafka foram publicadas durante sua vida: as coleções de contos Considerações e Um Médico Rural, e contos (como A Metamorfose) <br />
			em revistas literárias. Preparou a coleção Um Artista da Fome para impressão, mas só foi publicada postumamente. Os trabalhos inacabados de Kafka, como <br />
			os romances O Processo, O Castelo e O Desaparecido, foram publicados postumamente pelo seu amigo Max Brod, que ignorou o desejo de Kafka de ter seus <br />
			manuscritos destruídos. Albert Camus, Gabriel García Márquez e Jean-Paul Sartre estão entre os escritores influenciados pela obra de Kafka; <br />
			o termo "kafkiano" popularizou-se em português como algo complicado, labiríntico e surreal, como as situações encontradas em sua obra. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Franz_Kafka' > Wikipedia </a>
		</div>
		<?php $auctor='KAFKAfranz'; include '../design/poemfind.php'; ?>
		<?php $user = 'KAFKAfranz'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>