<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='MATOSgregorio'");
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

		<?php $user = 'MATOSgregorio'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Gregório de Matos Guerra (Salvador, 23 de dezembro de 1636 – Recife, 26 de novembro de 1696), alcunhado de Boca do Inferno ou Boca de Brasa, foi um advogado e poeta do Brasil Colônia. É considerado um dos maiores poetas do barroco em Portugal e no Brasil e o mais importante poeta satírico da literatura em língua portuguesa no período colonial. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Greg%C3%B3rio_de_Matos' > Wikipedia </a>
		</div>
		<?php $auctor='MATOSgregorio'; include '../design/poemfind.php'; ?>
		<?php $user = 'MATOSgregorio'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>