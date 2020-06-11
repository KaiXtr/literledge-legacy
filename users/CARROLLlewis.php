<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='CARROLLlewis'");
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

		<?php $user = 'CARROLLlewis'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Charles Lutwidge Dodgson, mais conhecido pelo seu pseudônimo Lewis Carroll (Daresbury, 27 de janeiro de 1832 — Guildford, 14 de Janeiro de 1898), foi um romancista, <br />
			contista, fabulista, poeta, desenhista, fotógrafo, matemático e reverendo anglicano britânico. Lecionou matemática no Christ College, em Oxford. <br />
			É autor do clássico livro Alice no País das Maravilhas, além de outros poemas escritos em estilo nonsense ao longo de sua carreira literária, que são <br />
			considerados políticos, em função das fusões e da disposição espacial das palavras, como precursores da poesia de vanguarda. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Lewis_Carroll' > Wikipedia </a>
		</div>
		<?php $auctor='CARROLLlewis'; include '../design/poemfind.php'; ?>
		<?php $user = 'CARROLLlewis'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>