<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='DRUMMONDandrade'");
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

		<?php $user = 'DRUMMONDandrade'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Carlos Drummond de Andrade (Itabira, 31 de outubro de 1902 — Rio de Janeiro, 17 de agosto de 1987) foi um poeta, contista e cronista brasileiro, considerado <br />
			por muitos o mais influente poeta brasileiro do século XX.[1] Drummond foi um dos principais poetas da segunda geração do Modernismo brasileiro.[2] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Carlos_Drummond_de_Andrade' > Wikipedia </a>
		</div>
		<?php $auctor='DRUMMONDandrade'; include '../design/poemfind.php'; ?>
		<?php $user = 'DRUMMONDandrade'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>