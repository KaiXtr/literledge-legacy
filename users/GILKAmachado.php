<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='GILKAmachado'");
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

		<?php $user = 'GILKAmachado'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Gilka da Costa de Melo Machado, conhecida como Gilka Machado, (Rio de Janeiro, 12 de março de 1893 - Rio de Janeiro, 11 de dezembro de 1980) foi uma poeta brasileira. Seu trabalho geralmente é classificado como simbolista. Machado ficou conhecida como uma das primeiras mulheres a escrever poesia erótica no Brasil; também foi uma das fundadoras do Partido Republicano Feminino (em 1910), que defendia o direito das mulheres ao voto, atuando no mesmo também como tesoureira.

			Desde o resgate de sua vida e obra por pesquisadores nos últimos anos, o interesse pela figura da poeta vem crescendo.
			Fonte: <a href='https://pt.wikipedia.org/wiki/Gilka_Machado'> Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Gilka da Costa de Melo Machado, conhecida como Gilka Machado, (Rio de Janeiro, 12 de março de 1893 - Rio de Janeiro, 11 de dezembro de 1980) foi uma poeta brasileira. Seu trabalho geralmente é classificado como simbolista. Machado ficou conhecida como uma das primeiras mulheres a escrever poesia erótica no Brasil; também foi uma das fundadoras do Partido Republicano Feminino (em 1910), que defendia o direito das mulheres ao voto, atuando no mesmo também como tesoureira.

			Desde o resgate de sua vida e obra por pesquisadores nos últimos anos, o interesse pela figura da poeta vem crescendo.
			Fonte: <a href='https://pt.wikipedia.org/wiki/Gilka_Machado'> Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Gilka da Costa de Melo Machado, conhecida como Gilka Machado, (Rio de Janeiro, 12 de março de 1893 - Rio de Janeiro, 11 de dezembro de 1980) foi uma poeta brasileira. Seu trabalho geralmente é classificado como simbolista. Machado ficou conhecida como uma das primeiras mulheres a escrever poesia erótica no Brasil; também foi uma das fundadoras do Partido Republicano Feminino (em 1910), que defendia o direito das mulheres ao voto, atuando no mesmo também como tesoureira.

			Desde o resgate de sua vida e obra por pesquisadores nos últimos anos, o interesse pela figura da poeta vem crescendo.
			Fonte: <a href='https://pt.wikipedia.org/wiki/Gilka_Machado'> Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='GILKAmachado'; include '../design/poemfind.php'; ?>
		<?php $user = 'GILKAmachado'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>