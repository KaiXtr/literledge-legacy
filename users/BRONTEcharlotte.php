<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='BRONTEcharlotte'");
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

		<?php $user = 'BRONTEcharlotte'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Charlotte Brontë (Thornton, 21 de Abril de 1816 — Haworth, 31 de Março de 1855) foi uma escritora e poetisa inglesa, a mais velha das três irmãs Brontë que chegaram à idade adulta e cujos romances são dos mais conhecidos da literatura inglesa. Nasceu em Thornton, oeste de Bradford, West Yorkshire, Reino Unido no dia 21 de abril de 1816. Escreveu o seu romance mais conhecido, Jane Eyre com o pseudônimo Currer Bell.[1]
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Charlotte_Bront%C3%AB' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='BRONTEcharlotte'; include '../design/poemfind.php'; ?>
		<?php $user = 'BRONTEcharlotte'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>