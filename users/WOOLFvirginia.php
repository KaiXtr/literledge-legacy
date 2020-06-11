<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='WOOLFvirginia'");
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

		<?php $user = 'WOOLFvirginia'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Adeline Virginia Woolf, nascida Adeline Virginia Stephen (Kensington, Middlesex, 25 de janeiro de 1882 — Lewes, Sussex, 28 de março de 1941), foi uma escritora, ensaísta e editora britânica, conhecida como uma das mais proeminentes figuras do modernismo.

				Estreou-se na literatura em 1915 com o romance The Voyage Out, que abriu o caminho para a sua carreira como escritora e uma série de obras notáveis. Morreu em 1941, tendo cometido suicídio.

				Woolf foi membro do Grupo de Bloomsbury e desempenhou um papel de significância dentro da sociedade literária londrina durante o período entre guerras. Seus trabalhos mais famosos incluem os romances Mrs. Dalloway (1925), To the Lighthouse (1927), Orlando: A Biography (1928), e o livro-ensaio A Room of One's Own (1929), onde encontra-se a famosa citação "Uma mulher deve ter dinheiro e um teto todo seu se ela quiser escrever ficção".
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Virginia_Woolf' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='WOOLFvirginia'; include '../design/poemfind.php'; ?>
		<?php $user = 'WOOLFvirginia'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>