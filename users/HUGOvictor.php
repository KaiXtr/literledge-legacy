<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php require '../design/array_lists.php';
		$v = $namlst['HUGOvictor'].' - '; include '../design/metadata.php'; ?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'HUGOvictor'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Victor-Marie Hugo (Besançon, 26 de fevereiro de 1802 — Paris, 22 de maio de 1885) foi um romancista, poeta, dramaturgo, ensaísta, artista, estadista e ativista <br />
			pelos direitos humanos francês de grande atuação política em seu país. É autor de Les Misérables e de Notre-Dame de Paris, entre diversas outras obras clássicas <br />
			de fama e renome mundial. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Victor_Hugo' > Wikipedia </a>
		</div>
		<?php $auctor='HUGOvictor'; include '../design/poemfind.php'; ?>
		<?php $user = 'HUGOvictor'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>