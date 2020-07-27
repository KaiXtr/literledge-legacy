<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='JAMEShenry'");
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

		<?php $user = 'JAMEShenry'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Henry James, Jr., OM (Nova Iorque, 15 de abril de 1843 — Londres, 28 de fevereiro de 1916) foi um escritor nascido nos Estados Unidos e naturalizado britânico. Uma das principais figuras do realismo na literatura do século XIX. Autor de alguns dos romances, contos e críticas literárias mais importantes da literatura de língua inglesa.

			Filho do teólogo Henry James Senior e irmão do médico, filósofo e psicólogo William James.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Henry_James' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Henry James, Jr., OM (Nova Iorque, 15 de abril de 1843 — Londres, 28 de fevereiro de 1916) foi um escritor nascido nos Estados Unidos e naturalizado britânico. Uma das principais figuras do realismo na literatura do século XIX. Autor de alguns dos romances, contos e críticas literárias mais importantes da literatura de língua inglesa.

			Filho do teólogo Henry James Senior e irmão do médico, filósofo e psicólogo William James.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Henry_James' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Henry James, Jr., OM (Nova Iorque, 15 de abril de 1843 — Londres, 28 de fevereiro de 1916) foi um escritor nascido nos Estados Unidos e naturalizado britânico. Uma das principais figuras do realismo na literatura do século XIX. Autor de alguns dos romances, contos e críticas literárias mais importantes da literatura de língua inglesa.

			Filho do teólogo Henry James Senior e irmão do médico, filósofo e psicólogo William James.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Henry_James' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='JAMEShenry'; include '../design/poemfind.php'; ?>
		<?php $user = 'JAMEShenry'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>