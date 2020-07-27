<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='BOTELHOoliveira'");
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

		<?php $user = 'BOTELHOoliveira'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Manuel Botelho de Oliveira (Salvador, 1636 — Salvador, 5 de janeiro de 1711) foi um advogado, político e um poeta barroco do Brasil Colônia. Foi o primeiro autor nascido no Brasil a ter um livro publicado.

			Filho de um capitão de infantaria, cursou Direito na Universidade de Coimbra, em Portugal.[1] De volta ao Brasil, passou a exercer a advocacia e foi eleito vereador da Câmara de Salvador. Em 1694 tornou-se capitão-mor dos distritos de Papagaio, Rio do Peixe e Gameleira, cargo obtido em função de empréstimo de 22 mil cruzados para a criação da Casa da Moeda, na Bahia.

			Manuel Botelho de Oliveira conviveu com Gregório de Matos e versou sobre os temas correntes da poesia de seu tempo.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Manuel_Botelho_de_Oliveira' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Manuel Botelho de Oliveira (Salvador, 1636 — Salvador, 5 de janeiro de 1711) foi um advogado, político e um poeta barroco do Brasil Colônia. Foi o primeiro autor nascido no Brasil a ter um livro publicado.

			Filho de um capitão de infantaria, cursou Direito na Universidade de Coimbra, em Portugal.[1] De volta ao Brasil, passou a exercer a advocacia e foi eleito vereador da Câmara de Salvador. Em 1694 tornou-se capitão-mor dos distritos de Papagaio, Rio do Peixe e Gameleira, cargo obtido em função de empréstimo de 22 mil cruzados para a criação da Casa da Moeda, na Bahia.

			Manuel Botelho de Oliveira conviveu com Gregório de Matos e versou sobre os temas correntes da poesia de seu tempo.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Manuel_Botelho_de_Oliveira' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Manuel Botelho de Oliveira (Salvador, 1636 — Salvador, 5 de janeiro de 1711) foi um advogado, político e um poeta barroco do Brasil Colônia. Foi o primeiro autor nascido no Brasil a ter um livro publicado.

			Filho de um capitão de infantaria, cursou Direito na Universidade de Coimbra, em Portugal.[1] De volta ao Brasil, passou a exercer a advocacia e foi eleito vereador da Câmara de Salvador. Em 1694 tornou-se capitão-mor dos distritos de Papagaio, Rio do Peixe e Gameleira, cargo obtido em função de empréstimo de 22 mil cruzados para a criação da Casa da Moeda, na Bahia.

			Manuel Botelho de Oliveira conviveu com Gregório de Matos e versou sobre os temas correntes da poesia de seu tempo.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Manuel_Botelho_de_Oliveira' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='BOTELHOoliveira'; include '../design/poemfind.php'; ?>
		<?php $user = 'BOTELHOoliveira'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>