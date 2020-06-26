<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ITAPARICAfrei'");
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

		<?php $user = 'ITAPARICAfrei'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Frei Itaparica, ou Frei Manuel de Santa Maria (Ilha de Itaparica, 1704 — Itaparica, c. 1768) foi um frade franciscano e um poeta barroco brasileiro.
			Pouco se conhece da sua vida, sabendo-se apenas que professou na Ordem dos Frades Menores, no convento de Cabaceiras do Paraguaçu, dedicando-se, mais tarde, ao púlpito.[1][2][3]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Manuel_de_Santa_Maria'> Wikipedia </a>
		</div>
		<?php $auctor='ITAPARICAfrei'; include '../design/poemfind.php'; ?>
		<?php $user = 'ITAPARICAfrei'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>