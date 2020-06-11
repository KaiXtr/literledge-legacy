<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='BANDEIRAmanuel'");
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

		<?php $user = 'BANDEIRAmanuel'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Manuel Carneiro de Sousa Bandeira Filho (Recife, 19 de abril de 1886 — Rio de Janeiro, 13 de outubro de 1968) foi um poeta, crítico literário e de arte, professor de  <br />literatura e tradutor brasileiro. <br />
			 <br />
			É considerado como parte da geração de 1922 do modernismo no Brasil. Seu poema "Os Sapos" foi o abre-alas da Semana de Arte Moderna. Juntamente com escritores como João  <br />Cabral de Melo Neto, Gilberto Freyre, Clarice Lispector e Joaquim Cardozo, entre outros, representa o melhor da produção literária do estado de Pernambuco. <br />
			 <br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Manuel_Bandeira' > Wikipedia </a>
		</div>
		<?php $auctor='BANDEIRAmanuel'; include '../design/poemfind.php'; ?>
		<?php $user = 'BANDEIRAmanuel'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>