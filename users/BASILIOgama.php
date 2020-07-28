<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='BASILIOgama'");
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

		<?php $user = 'BASILIOgama'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			José Basílio da Gama (São José do Rio das Mortes, 8 de abril de 1741 — Lisboa, 31 de julho de 1795) foi um poeta luso-brasileiro <br />
			que escrevia sob o pseudónimo Termindo Sipílio. Célebre por seu poema épico O Uraguai, de 1769, e investido como patrono da cadeira <br />
			4 da Academia Brasileira de Letras. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Basílio_da_Gama' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			José Basílio da Gama (São José do Rio das Mortes, 8 de abril de 1741 — Lisboa, 31 de julho de 1795) foi um poeta luso-brasileiro <br />
			que escrevia sob o pseudónimo Termindo Sipílio. Célebre por seu poema épico O Uraguai, de 1769, e investido como patrono da cadeira <br />
			4 da Academia Brasileira de Letras. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Basílio_da_Gama' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			José Basílio da Gama (São José do Rio das Mortes, 8 de abril de 1741 — Lisboa, 31 de julho de 1795) foi um poeta luso-brasileiro <br />
			que escrevia sob o pseudónimo Termindo Sipílio. Célebre por seu poema épico O Uraguai, de 1769, e investido como patrono da cadeira <br />
			4 da Academia Brasileira de Letras. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Basílio_da_Gama' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='BASILIOgama'; include '../design/poemfind.php'; ?>
		<?php $user = 'BASILIOgama'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>