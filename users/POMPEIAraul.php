<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php require '../design/array_lists.php';
		$v = $namlst['POMPEIAraul'].' - '; include '../design/metadata.php'; ?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'POMPEIAraul'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Raul Pompeia[1] (Angra dos Reis, 12 de abril de 1863 — Rio de Janeiro, 25 de dezembro de 1895) foi um escritor brasileiro, conhecido por sua obra O Ateneu. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Raul_Pompeia' > Wikipedia </a>
		</div>
		<?php $auctor='POMPEIAraul'; include '../design/poemfind.php'; ?>
		<?php $user = 'POMPEIAraul'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>