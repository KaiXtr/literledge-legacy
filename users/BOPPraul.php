<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='BOPPraul'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['name'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'BOPPraul'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Raul Bopp (Vila Pinhal, 4 de agosto de 1898 — Rio de Janeiro, 2 de junho de 1984) foi um poeta modernista e diplomata brasileiro. <br />
			 <br />
			Participou da Semana de Arte Moderna ao lado dos amigos Tarsila do Amaral e Oswald de Andrade. Seu livro Cobra Norato é considerado o mais importante do  <br />
			Movimento Antropófago. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Raul_Bopp' > Wikipedia </a>
		</div>
		<?php $auctor='BOPPraul'; include '../design/poemfind.php'; ?>
		<?php $user = 'BOPPraul'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>