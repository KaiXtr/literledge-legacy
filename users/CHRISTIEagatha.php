<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='CHRISTIEagatha'");
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

		<?php $user = 'CHRISTIEagatha'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Agatha Mary Clarissa Christie DBE, nascida Agatha Mary Clarissa Miller; (Torquay, 15 de setembro de 1890 — Wallingford, 12 de janeiro de 1976), popularmente conhecida <br />
			como Agatha Christie, foi uma escritora britânica que atuou como romancista, contista, dramaturga e poetisa. Destacou-se no subgênero romance policial, tendo ganho <br />
			popularmente, em vida, a alcunha de \"Rainha/Dama do Crime\" (\"Queen/Lady of Crime\", no original em inglês). Durante sua carreira, publicou mais de oitenta livros, <br />
			alguns sob o pseudônimo de Mary Westmacott. <br />
			<br />
			Segundo o Guiness Book, Christie é a romancista mais bem sucedida da história da literatura popular mundial em número total de livros vendidos,[1][2] uma vez que <br />
			suas obras, juntas, venderam cerca de quatro bilhões de cópias ao longo dos séculos XX e XXI,[3] cujos números totais só ficam atrás das obras vendidas do <br />
			dramaturgo e poeta William Shakespeare e da Bíblia. Segundo a organização Index Translationum, as obras de Agatha Christie já foram traduzidas, em levantamento recente, <br />
			para mais de 100 idiomas em todo o mundo. Seu livro mais vendido, Ten Little Niggers (publicado no Brasil como E Não Sobrou Nenhum, ou O Caso dos Dez Negrinhos, <br />
			e em Portugal como Convite para a Morte ou As Dez Figuras Negras), de 1939, é também, com cerca de 100 milhões de cópias comercializadas em todo o globo, <br />
			a obra de romance policial mais vendida da história, além de figurar na lista dos livros mais vendidos de todos os tempos, independentemente de seu gênero. <br />
			<br />
			Em 1971, foi condecorada pela rainha do Reino Unido, Elizabeth II, com o título de Dama-Comendadora da Ordem do Império Britânico, uma honra que consiste <br />
			no equivalente feminino ao sir. No total, escreveu setenta e dois romances, sendo sessenta e seis deles do gênero romance policial e inúmeros contos, <br />
			reunidos em quatorze coletâneas. É constantemente referida por seus emblemáticos personagens, incluindo o detetive belga Hercule Poirot e a idosa detetive <br />
			amadora Miss Marple. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Agatha_Christie' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Agatha Mary Clarissa Christie DBE, nascida Agatha Mary Clarissa Miller; (Torquay, 15 de setembro de 1890 — Wallingford, 12 de janeiro de 1976), popularmente conhecida <br />
			como Agatha Christie, foi uma escritora britânica que atuou como romancista, contista, dramaturga e poetisa. Destacou-se no subgênero romance policial, tendo ganho <br />
			popularmente, em vida, a alcunha de \"Rainha/Dama do Crime\" (\"Queen/Lady of Crime\", no original em inglês). Durante sua carreira, publicou mais de oitenta livros, <br />
			alguns sob o pseudônimo de Mary Westmacott. <br />
			<br />
			Segundo o Guiness Book, Christie é a romancista mais bem sucedida da história da literatura popular mundial em número total de livros vendidos,[1][2] uma vez que <br />
			suas obras, juntas, venderam cerca de quatro bilhões de cópias ao longo dos séculos XX e XXI,[3] cujos números totais só ficam atrás das obras vendidas do <br />
			dramaturgo e poeta William Shakespeare e da Bíblia. Segundo a organização Index Translationum, as obras de Agatha Christie já foram traduzidas, em levantamento recente, <br />
			para mais de 100 idiomas em todo o mundo. Seu livro mais vendido, Ten Little Niggers (publicado no Brasil como E Não Sobrou Nenhum, ou O Caso dos Dez Negrinhos, <br />
			e em Portugal como Convite para a Morte ou As Dez Figuras Negras), de 1939, é também, com cerca de 100 milhões de cópias comercializadas em todo o globo, <br />
			a obra de romance policial mais vendida da história, além de figurar na lista dos livros mais vendidos de todos os tempos, independentemente de seu gênero. <br />
			<br />
			Em 1971, foi condecorada pela rainha do Reino Unido, Elizabeth II, com o título de Dama-Comendadora da Ordem do Império Britânico, uma honra que consiste <br />
			no equivalente feminino ao sir. No total, escreveu setenta e dois romances, sendo sessenta e seis deles do gênero romance policial e inúmeros contos, <br />
			reunidos em quatorze coletâneas. É constantemente referida por seus emblemáticos personagens, incluindo o detetive belga Hercule Poirot e a idosa detetive <br />
			amadora Miss Marple. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Agatha_Christie' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Agatha Mary Clarissa Christie DBE, nascida Agatha Mary Clarissa Miller; (Torquay, 15 de setembro de 1890 — Wallingford, 12 de janeiro de 1976), popularmente conhecida <br />
			como Agatha Christie, foi uma escritora britânica que atuou como romancista, contista, dramaturga e poetisa. Destacou-se no subgênero romance policial, tendo ganho <br />
			popularmente, em vida, a alcunha de \"Rainha/Dama do Crime\" (\"Queen/Lady of Crime\", no original em inglês). Durante sua carreira, publicou mais de oitenta livros, <br />
			alguns sob o pseudônimo de Mary Westmacott. <br />
			<br />
			Segundo o Guiness Book, Christie é a romancista mais bem sucedida da história da literatura popular mundial em número total de livros vendidos,[1][2] uma vez que <br />
			suas obras, juntas, venderam cerca de quatro bilhões de cópias ao longo dos séculos XX e XXI,[3] cujos números totais só ficam atrás das obras vendidas do <br />
			dramaturgo e poeta William Shakespeare e da Bíblia. Segundo a organização Index Translationum, as obras de Agatha Christie já foram traduzidas, em levantamento recente, <br />
			para mais de 100 idiomas em todo o mundo. Seu livro mais vendido, Ten Little Niggers (publicado no Brasil como E Não Sobrou Nenhum, ou O Caso dos Dez Negrinhos, <br />
			e em Portugal como Convite para a Morte ou As Dez Figuras Negras), de 1939, é também, com cerca de 100 milhões de cópias comercializadas em todo o globo, <br />
			a obra de romance policial mais vendida da história, além de figurar na lista dos livros mais vendidos de todos os tempos, independentemente de seu gênero. <br />
			<br />
			Em 1971, foi condecorada pela rainha do Reino Unido, Elizabeth II, com o título de Dama-Comendadora da Ordem do Império Britânico, uma honra que consiste <br />
			no equivalente feminino ao sir. No total, escreveu setenta e dois romances, sendo sessenta e seis deles do gênero romance policial e inúmeros contos, <br />
			reunidos em quatorze coletâneas. É constantemente referida por seus emblemáticos personagens, incluindo o detetive belga Hercule Poirot e a idosa detetive <br />
			amadora Miss Marple. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Agatha_Christie' > Wikipedia </a>
			<br />
					";
				}
			?>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/rnXOFET06xc?start=141" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='CHRISTIEagatha'; include '../design/poemfind.php'; ?>
		<?php $user = 'CHRISTIEagatha'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>