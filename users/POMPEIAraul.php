<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='POMPEIAraul'");
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

		<?php $user = 'POMPEIAraul'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Raul Pompeia (Angra dos Reis, 12 de abril de 1863 — Rio de Janeiro, 25 de dezembro de 1895) foi um escritor brasileiro, conhecido por sua obra O Ateneu. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Raul_Pompeia' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Raul Pompeia (Angra dos Reis, 12 de abril de 1863 — Rio de Janeiro, 25 de dezembro de 1895) foi um escritor brasileiro, conhecido por sua obra O Ateneu. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Raul_Pompeia' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Raul Pompeia (Angra dos Reis, 12 de abril de 1863 — Rio de Janeiro, 25 de dezembro de 1895) foi um escritor brasileiro, conhecido por sua obra O Ateneu. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Raul_Pompeia' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='POMPEIAraul'; include '../design/poemfind.php'; ?>
		<?php $user = 'POMPEIAraul'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>