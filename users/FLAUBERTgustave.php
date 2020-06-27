<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='FLAUBERTgustave'");
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

		<?php $user = 'FLAUBERTgustave'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Gustave Flaubert (Rouen, 12 de dezembro de 1821[1] – Croisset, 8 de maio de 1880 [2]) foi um escritor francês. Prosador importante, Flaubert marcou a literatura francesa pela profundidade de suas análises psicológicas, pelo seu senso de realidade, pela sua lucidez sobre o comportamento social, e pela força de seu estilo em grandes romances, tais como Madame Bovary (1857), A Educação Sentimental (1869), Salammbô (1862), mais os seus contos, nomeadamente os Trois contes (1877).
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Gustave_Flaubert'> Wikipedia </a>
		</div>
		<?php $auctor='FLAUBERTgustave'; include '../design/poemfind.php'; ?>
		<?php $user = 'FLAUBERTgustave'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>