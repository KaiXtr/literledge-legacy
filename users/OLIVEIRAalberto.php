<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='OLIVEIRAalberto'");
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

		<?php $user = 'OLIVEIRAalberto'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Antônio Mariano Alberto de Oliveira (Saquarema, 28 de abril de 1857 — Niterói, 19 de Janeiro de 1937), mais conhecido pelo pseudônimo Alberto de Oliveira, foi um poeta, professor e farmacêutico brasileiro. Figura como líder do Parnasianismo brasileiro, na famosa tríade Alberto de Oliveira, Raimundo Correia e Olavo Bilac.

			Foi secretário estadual de educação, membro honorário da Academia de Ciências de Lisboa e imortal fundador da Academia Brasileira de Letras. Adotou o nome literário Alberto de Oliveira no livro de estréia, após várias modificações dispersas nos jornais.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Ant%C3%B4nio_Mariano_de_Oliveira'> Wikipedia </a>
		</div>
		<?php $auctor='OLIVEIRAalberto'; include '../design/poemfind.php'; ?>
		<?php $user = 'OLIVEIRAalberto'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>