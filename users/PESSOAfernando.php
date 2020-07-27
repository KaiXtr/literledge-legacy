<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='PESSOAfernando'");
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

		<?php $user = 'PESSOAfernando'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Fernando António Nogueira Pessoa (Lisboa, 13 de junho de 1888 — Lisboa, 30 de novembro de 1935) foi um poeta, filósofo, dramaturgo, ensaísta, <br />
			tradutor, publicitário, astrólogo, inventor, empresário, correspondente comercial, crítico literário e comentarista político português. <br />
			<br />
			Fernando Pessoa é o mais universal poeta português. Por ter sido educado na África do Sul, numa escola católica irlandesa, chegou a ter maior  <br />
			familiaridade com o idioma inglês do que com o português ao escrever os seus primeiros poemas nesse idioma. O crítico literário Harold Bloom  <br />
			considerou Pessoa como \"Whitman renascido\",[4] e o incluiu no seu cânone entre os 26 melhores escritores da civilização ocidental,[5] não apenas  <br />
			da literatura portuguesa mas também da inglesa.[5] <br />
			<br />
			Das quatro obras que publicou em vida, três são na língua inglesa e apenas uma em língua portuguesa, entitulada Mensagem.[6][7] Fernando Pessoa  <br />
			traduziu várias obras em inglês (e.g., de Shakespeare e Edgar Allan Poe) para o português, e obras portuguesas (nomeadamente de António Botto[8] <br />
			e Almada Negreiros) para o inglês. <br />
			<br />
			Enquanto poeta, escreveu sob diversas personalidades – heterónimos, como Ricardo Reis, Álvaro de Campos e Alberto Caeiro –, sendo estes últimos  <br />
			objeto da maior parte dos estudos sobre a sua vida e obra. Robert Hass, poeta americano, diz: \"outros modernistas como Yeats, Pound, Eliot inventaram  <br />
			máscaras pelas quais falavam ocasionalmente... Pessoa inventava poetas inteiros.\" [9] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Fernando_pessoa' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Fernando António Nogueira Pessoa (Lisboa, 13 de junho de 1888 — Lisboa, 30 de novembro de 1935) foi um poeta, filósofo, dramaturgo, ensaísta, <br />
			tradutor, publicitário, astrólogo, inventor, empresário, correspondente comercial, crítico literário e comentarista político português. <br />
			<br />
			Fernando Pessoa é o mais universal poeta português. Por ter sido educado na África do Sul, numa escola católica irlandesa, chegou a ter maior  <br />
			familiaridade com o idioma inglês do que com o português ao escrever os seus primeiros poemas nesse idioma. O crítico literário Harold Bloom  <br />
			considerou Pessoa como \"Whitman renascido\",[4] e o incluiu no seu cânone entre os 26 melhores escritores da civilização ocidental,[5] não apenas  <br />
			da literatura portuguesa mas também da inglesa.[5] <br />
			<br />
			Das quatro obras que publicou em vida, três são na língua inglesa e apenas uma em língua portuguesa, entitulada Mensagem.[6][7] Fernando Pessoa  <br />
			traduziu várias obras em inglês (e.g., de Shakespeare e Edgar Allan Poe) para o português, e obras portuguesas (nomeadamente de António Botto[8] <br />
			e Almada Negreiros) para o inglês. <br />
			<br />
			Enquanto poeta, escreveu sob diversas personalidades – heterónimos, como Ricardo Reis, Álvaro de Campos e Alberto Caeiro –, sendo estes últimos  <br />
			objeto da maior parte dos estudos sobre a sua vida e obra. Robert Hass, poeta americano, diz: \"outros modernistas como Yeats, Pound, Eliot inventaram  <br />
			máscaras pelas quais falavam ocasionalmente... Pessoa inventava poetas inteiros.\" [9] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Fernando_pessoa' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Fernando António Nogueira Pessoa (Lisboa, 13 de junho de 1888 — Lisboa, 30 de novembro de 1935) foi um poeta, filósofo, dramaturgo, ensaísta, <br />
			tradutor, publicitário, astrólogo, inventor, empresário, correspondente comercial, crítico literário e comentarista político português. <br />
			<br />
			Fernando Pessoa é o mais universal poeta português. Por ter sido educado na África do Sul, numa escola católica irlandesa, chegou a ter maior  <br />
			familiaridade com o idioma inglês do que com o português ao escrever os seus primeiros poemas nesse idioma. O crítico literário Harold Bloom  <br />
			considerou Pessoa como \"Whitman renascido\",[4] e o incluiu no seu cânone entre os 26 melhores escritores da civilização ocidental,[5] não apenas  <br />
			da literatura portuguesa mas também da inglesa.[5] <br />
			<br />
			Das quatro obras que publicou em vida, três são na língua inglesa e apenas uma em língua portuguesa, entitulada Mensagem.[6][7] Fernando Pessoa  <br />
			traduziu várias obras em inglês (e.g., de Shakespeare e Edgar Allan Poe) para o português, e obras portuguesas (nomeadamente de António Botto[8] <br />
			e Almada Negreiros) para o inglês. <br />
			<br />
			Enquanto poeta, escreveu sob diversas personalidades – heterónimos, como Ricardo Reis, Álvaro de Campos e Alberto Caeiro –, sendo estes últimos  <br />
			objeto da maior parte dos estudos sobre a sua vida e obra. Robert Hass, poeta americano, diz: \"outros modernistas como Yeats, Pound, Eliot inventaram  <br />
			máscaras pelas quais falavam ocasionalmente... Pessoa inventava poetas inteiros.\" [9] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Fernando_pessoa' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='PESSOAfernando'; include '../design/poemfind.php'; ?>
		<?php $user = 'PESSOAfernando'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>