<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='AZEVEDOaluisio'");
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

		<?php $user = 'AZEVEDOaluisio'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Aluísio Tancredo Gonçalves de Azevedo (São Luís, 14 de abril de 1857 — Buenos Aires, 21 de janeiro de 1913) foi um romancista, contista, cronista, diplomata, <br />
			caricaturista e jornalista brasileiro; além de desenhista e pintor. <br />
			 <br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Aluísio_Azevedo' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Aluísio Tancredo Gonçalves de Azevedo (São Luís, 14 de abril de 1857 — Buenos Aires, 21 de janeiro de 1913) foi um romancista, contista, cronista, diplomata, <br />
			caricaturista e jornalista brasileiro; além de desenhista e pintor. <br />
			 <br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Aluísio_Azevedo' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Aluísio Tancredo Gonçalves de Azevedo (São Luís, 14 de abril de 1857 — Buenos Aires, 21 de janeiro de 1913) foi um romancista, contista, cronista, diplomata, <br />
			caricaturista e jornalista brasileiro; além de desenhista e pintor. <br />
			 <br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Aluísio_Azevedo' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='AZEVEDOaluisio'; include '../design/poemfind.php'; ?>
		<?php $user = 'AZEVEDOaluisio'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>