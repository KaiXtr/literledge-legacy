<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php require '../design/array_lists.php';
		$v = $namlst['GRIMMbros'].' - '; include '../design/metadata.php'; ?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'GRIMMbros'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Os irmãos Grimm (em alemão Brüder Grimm ou Gebrüder Grimm), Jacob (Hanau, 4 de janeiro de 1785 – Berlim, 20 de setembro de 1863) e Wilhelm <br />
			(Hanau, 24 de fevereiro de 1786 – Berlim, 16 de dezembro de 1859),[1] foram dois irmãos, ambos acadêmicos, linguistas, poetas e escritores que nasceram <br />
			no então Condado de Hesse-Darmstadt, atual Alemanha. Os dois dedicaram-se ao registro de várias fábulas infantis, ganhando assim grande notoriedade, <br />
			essa que, gradativamente, tomou proporções globais. Também deram grandes contribuições à língua alemã, tendo os dois trabalhado na criação e divulgação, <br />
			a partir de 1838, do Dicionário Definitivo da Língua Alemã (o "Deutsches Wörterbuch"), que não chegaram a completar, devido a morte de ambos entre as <br />
			décadas de 1850 e 1860. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Irmãos_Grimm' > Wikipedia </a>
		</div>
		<?php $auctor='GRIMMbros'; include '../design/poemfind.php'; ?>
		<?php $user = 'GRIMMbros'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>