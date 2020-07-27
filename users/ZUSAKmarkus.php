<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ZUSAKmarkus'");
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

		<?php $user = 'ZUSAKmarkus'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Zusak nasceu na Austrália. Sua mãe, Lisa, é Alemã, e seu pai, Helmut, é Austríaco. Eles mudaram-se para a Austrália no final de 1950. Markus [1] é o mais novo de 4 irmãos, duas meninas e um menino.
			Zusak é o autor de cinco livros. The Underdog (O Azarão em português), seu primeiro livro, levou sete anos para ser publicado. O mensageiro[2] , publicado em 2002, venceu o prémio de livro do ano no CBCA (prémio australiano de livros). Em 2005, A menina que roubava livros foi lançado e, atualmente, já foi traduzido em mais de 40 idiomas. Também recebeu prémios na Austrália e pelo mundo. A menina que roubava livros se manteve em primeiro lugar de vendas no site da Amazon.com[3], na lista dos mais vendidos do The New York Times, e também em países como o Brasil, Irlanda e Taiwan. Ficou entre os 5 mais vendidos no Reino Unido (UK), Israel, Espanha e Coreia do Sul. Outros países ainda esperam por seu lançamento.O livro foi adaptado para o cinema[4].

			Aos 30 anos, Zusak já se firmou como um dos mais inovadores e poéticos romancistas dos dias de hoje. Com a publicação de \"A Menina que Roubava Livros\", ele foi batizado como um \"fenômeno literário\" por críticos australianos e norte-americanos. Zusak é o autor vencedor do prémio de quatro livros para jovens: \"O Azarão\", \"Bom de Briga\", \"A Garota que eu quero\", e \"Eu Sou o Mensageiro\", recetor de um Printz Honor em 2006 por excelência em literatura jovem. Markus Zusak vive em Sydney com sua esposa e sua filha. Gosta de surfar e assistir filmes em seu tempo livre.[5] .-.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Markus_Zusak' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Zusak nasceu na Austrália. Sua mãe, Lisa, é Alemã, e seu pai, Helmut, é Austríaco. Eles mudaram-se para a Austrália no final de 1950. Markus [1] é o mais novo de 4 irmãos, duas meninas e um menino.
			Zusak é o autor de cinco livros. The Underdog (O Azarão em português), seu primeiro livro, levou sete anos para ser publicado. O mensageiro[2] , publicado em 2002, venceu o prémio de livro do ano no CBCA (prémio australiano de livros). Em 2005, A menina que roubava livros foi lançado e, atualmente, já foi traduzido em mais de 40 idiomas. Também recebeu prémios na Austrália e pelo mundo. A menina que roubava livros se manteve em primeiro lugar de vendas no site da Amazon.com[3], na lista dos mais vendidos do The New York Times, e também em países como o Brasil, Irlanda e Taiwan. Ficou entre os 5 mais vendidos no Reino Unido (UK), Israel, Espanha e Coreia do Sul. Outros países ainda esperam por seu lançamento.O livro foi adaptado para o cinema[4].

			Aos 30 anos, Zusak já se firmou como um dos mais inovadores e poéticos romancistas dos dias de hoje. Com a publicação de \"A Menina que Roubava Livros\", ele foi batizado como um \"fenômeno literário\" por críticos australianos e norte-americanos. Zusak é o autor vencedor do prémio de quatro livros para jovens: \"O Azarão\", \"Bom de Briga\", \"A Garota que eu quero\", e \"Eu Sou o Mensageiro\", recetor de um Printz Honor em 2006 por excelência em literatura jovem. Markus Zusak vive em Sydney com sua esposa e sua filha. Gosta de surfar e assistir filmes em seu tempo livre.[5] .-.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Markus_Zusak' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Zusak nasceu na Austrália. Sua mãe, Lisa, é Alemã, e seu pai, Helmut, é Austríaco. Eles mudaram-se para a Austrália no final de 1950. Markus [1] é o mais novo de 4 irmãos, duas meninas e um menino.
			Zusak é o autor de cinco livros. The Underdog (O Azarão em português), seu primeiro livro, levou sete anos para ser publicado. O mensageiro[2] , publicado em 2002, venceu o prémio de livro do ano no CBCA (prémio australiano de livros). Em 2005, A menina que roubava livros foi lançado e, atualmente, já foi traduzido em mais de 40 idiomas. Também recebeu prémios na Austrália e pelo mundo. A menina que roubava livros se manteve em primeiro lugar de vendas no site da Amazon.com[3], na lista dos mais vendidos do The New York Times, e também em países como o Brasil, Irlanda e Taiwan. Ficou entre os 5 mais vendidos no Reino Unido (UK), Israel, Espanha e Coreia do Sul. Outros países ainda esperam por seu lançamento.O livro foi adaptado para o cinema[4].

			Aos 30 anos, Zusak já se firmou como um dos mais inovadores e poéticos romancistas dos dias de hoje. Com a publicação de \"A Menina que Roubava Livros\", ele foi batizado como um \"fenômeno literário\" por críticos australianos e norte-americanos. Zusak é o autor vencedor do prémio de quatro livros para jovens: \"O Azarão\", \"Bom de Briga\", \"A Garota que eu quero\", e \"Eu Sou o Mensageiro\", recetor de um Printz Honor em 2006 por excelência em literatura jovem. Markus Zusak vive em Sydney com sua esposa e sua filha. Gosta de surfar e assistir filmes em seu tempo livre.[5] .-.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Markus_Zusak' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='ZUSAKmarkus'; include '../design/poemfind.php'; ?>
		<?php $user = 'ZUSAKmarkus'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>