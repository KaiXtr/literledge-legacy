<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='DIASgoncalves'");
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

		<?php $user = 'DIASgoncalves'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Antônio Gonçalves Dias (Caxias, 10 de agosto de 1823 — Guimarães, 3 de novembro de 1864) foi um poeta, advogado, jornalista, etnógrafo e teatrólogo brasileiro.[2] Um grande expoente do romantismo brasileiro e da tradição literária conhecida como "indianismo", é famoso por ter escrito o poema "Canção do Exílio", o curto poema épico I-Juca-Pirama e muitos outros poemas nacionalistas e patrióticos, além de seu segundo mais conhecido poema chamado: Canções de Exílio que viriam a dar-lhe o título de poeta nacional do Brasil. Foi um ávido pesquisador das línguas indígenas e do folclore brasileiro.

				É o patrono da cadeira 15 da Academia Brasileira de Letras.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Gon%C3%A7alves_Dias' > Wikipedia </a>
			</div>
			<div class='manlan' lang='en'>
				Hot dog yea trup united states uhuuuu rockn roll <br />
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Esopo' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='DIASgoncalves'; include '../design/poemfind.php'; ?>
		<?php $user = 'DIASgoncalves'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>