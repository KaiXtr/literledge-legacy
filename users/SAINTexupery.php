<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='SAINTexupery'");
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

		<?php $user = 'SAINTexupery'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Antoine Jean-Baptiste Marie Roger Foscolombe, Conde de Saint-Exupéry, popularmente conhecido como Antoine de Saint-Exupéry <br />
			(Lyon, 29 de junho de 1900 — litoral sul da França, 31 de julho de 1944) foi um escritor, ilustrador e piloto francês, terceiro filho do conde <br />
			Jean Saint-Exupéry e da condessa Marie Foscolombe. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Antoine_de_Saint-Exupéry' > Wikipedia </a>
		</div>
		<?php $auctor='SAINTexupery'; include '../design/poemfind.php'; ?>
		<?php $user = 'SAINTexupery'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>