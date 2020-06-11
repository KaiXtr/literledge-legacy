<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='DUMASalexandre'");
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

		<?php $user = 'DUMASalexandre'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Alexandre Dumas, conhecido como Alexandre Dumas, Pai (Villers-Cotterêts, 24 de julho de 1802 — Puys, 5 de dezembro de 1870), foi um romancista francês. <br />
			Nasceu na região de Aisne, próximo a Paris. Era neto do marquês Alexandre Antoine Davy de la Pailleterie e de uma escrava <br />
			(ou liberta, não se sabe ao certo) negra, Marie-Césette Dumas. Seu pai foi Thomas Alexandre Davy de la Pailleterie, mais conhecido como General Dumas, <br />
			grande figura militar de sua época.[1] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Alexandre_Dumas_(pai)' > Wikipedia </a>
		</div>
		<?php $auctor='DUMASalexandre'; include '../design/poemfind.php'; ?>
		<?php $user = 'DUMASalexandre'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>