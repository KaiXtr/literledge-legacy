<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='HEMINGWAYernest'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'];}
				else {$v = $i[$_COOKIE['lang']];}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'HEMINGWAYernest'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Ernest Miller Hemingway (Oak Park, 21 de Julho de 1899 — Ketchum, 2 de Julho de 1961) foi um escritor norte-americano. Trabalhou como correspondente de guerra em Madri durante a Guerra Civil Espanhola (1936-1939). Esta experiência inspirou uma de suas maiores obras, Por Quem os Sinos Dobram. Ao fim da Segunda Guerra Mundial (1939-1945), se instalou em Cuba. Em 1953, ganhou o Prémio Pulitzer de Ficção, e, em 1954, ganhou o prêmio Nobel de Literatura. Suicidou-se em Ketchum, em Idaho, em 1961.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Ernest_Hemingway' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Ernest Miller Hemingway (Oak Park, 21 de Julho de 1899 — Ketchum, 2 de Julho de 1961) foi um escritor norte-americano. Trabalhou como correspondente de guerra em Madri durante a Guerra Civil Espanhola (1936-1939). Esta experiência inspirou uma de suas maiores obras, Por Quem os Sinos Dobram. Ao fim da Segunda Guerra Mundial (1939-1945), se instalou em Cuba. Em 1953, ganhou o Prémio Pulitzer de Ficção, e, em 1954, ganhou o prêmio Nobel de Literatura. Suicidou-se em Ketchum, em Idaho, em 1961.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Ernest_Hemingway' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Ernest Miller Hemingway (Oak Park, 21 de Julho de 1899 — Ketchum, 2 de Julho de 1961) foi um escritor norte-americano. Trabalhou como correspondente de guerra em Madri durante a Guerra Civil Espanhola (1936-1939). Esta experiência inspirou uma de suas maiores obras, Por Quem os Sinos Dobram. Ao fim da Segunda Guerra Mundial (1939-1945), se instalou em Cuba. Em 1953, ganhou o Prémio Pulitzer de Ficção, e, em 1954, ganhou o prêmio Nobel de Literatura. Suicidou-se em Ketchum, em Idaho, em 1961.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Ernest_Hemingway' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='HEMINGWAYernest'; include '../design/poemfind.php'; ?>
		<?php $user = 'HEMINGWAYernest'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>