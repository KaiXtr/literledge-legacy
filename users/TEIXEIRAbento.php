<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='TEIXEIRAbento'");
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

		<?php $user = 'TEIXEIRAbento'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Bento Teixeira (Porto, ca. 1561 - Pernambuco ou Lisboa, 1600) foi um poeta luso-brasileiro, cuja única obra, o poema épico Prosopopeia, é referida como o marco inicial do barroco na literatura brasileira.

			De biografia nebulosa, poucos fatos podem ser atestados sobre sua vida e obra. Chegou-se a lhe atribuir duas outras obras, mais tarde de autoria revisada .
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Bento_Teixeira' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Bento Teixeira (Porto, ca. 1561 - Pernambuco ou Lisboa, 1600) foi um poeta luso-brasileiro, cuja única obra, o poema épico Prosopopeia, é referida como o marco inicial do barroco na literatura brasileira.

			De biografia nebulosa, poucos fatos podem ser atestados sobre sua vida e obra. Chegou-se a lhe atribuir duas outras obras, mais tarde de autoria revisada .
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Bento_Teixeira' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Bento Teixeira (Porto, ca. 1561 - Pernambuco ou Lisboa, 1600) foi um poeta luso-brasileiro, cuja única obra, o poema épico Prosopopeia, é referida como o marco inicial do barroco na literatura brasileira.

			De biografia nebulosa, poucos fatos podem ser atestados sobre sua vida e obra. Chegou-se a lhe atribuir duas outras obras, mais tarde de autoria revisada .
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Bento_Teixeira' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='TEIXEIRAbento'; include '../design/poemfind.php'; ?>
		<?php $user = 'TEIXEIRAbento'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>