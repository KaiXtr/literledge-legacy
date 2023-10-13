<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ALENCARjose'");
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

		<?php $user = 'ALENCARjose'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
				José Martiniano de Alencar (Messejana, 1 de maio de 1829 — Rio de Janeiro, 12 de dezembro de 1877) foi um escritor e político brasileiro. É notável como escritor por ter <br />
				sido o fundador do romance de temática nacional, e por ser o patrono da cadeira fundada por Machado de Assis na Academia Brasileira de Letras. <br />
				 <br />
				Na carreira política, foi notória a sua tenaz defesa da escravidão no Brasil quando ministro da Justiça do segundo reinado (ver Gabinete Itaboraí de 1868). Era neto <br />
				de Bárbara de Alencar, uma heroína da Revolução Pernambucana. <br />
				 <br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/José_de_Alencar' > Wikipedia </a>";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
				José Martiniano de Alencar (Messejana, 1 de maio de 1829 — Rio de Janeiro, 12 de dezembro de 1877) foi um escritor e político brasileiro. É notável como escritor por ter <br />
				sido o fundador do romance de temática nacional, e por ser o patrono da cadeira fundada por Machado de Assis na Academia Brasileira de Letras. <br />
				 <br />
				Na carreira política, foi notória a sua tenaz defesa da escravidão no Brasil quando ministro da Justiça do segundo reinado (ver Gabinete Itaboraí de 1868). Era neto <br />
				de Bárbara de Alencar, uma heroína da Revolução Pernambucana. <br />
				 <br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/José_de_Alencar' > Wikipedia </a>";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
				José Martiniano de Alencar (Messejana, 1 de maio de 1829 — Rio de Janeiro, 12 de dezembro de 1877) foi um escritor e político brasileiro. É notável como escritor por ter <br />
				sido o fundador do romance de temática nacional, e por ser o patrono da cadeira fundada por Machado de Assis na Academia Brasileira de Letras. <br />
				 <br />
				Na carreira política, foi notória a sua tenaz defesa da escravidão no Brasil quando ministro da Justiça do segundo reinado (ver Gabinete Itaboraí de 1868). Era neto <br />
				de Bárbara de Alencar, uma heroína da Revolução Pernambucana. <br />
				 <br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/José_de_Alencar' > Wikipedia </a>";
				}
			?>
		</div>
		<?php $auctor='ALENCARjose'; include '../design/poemfind.php'; ?>
		<?php $user = 'ALENCARjose'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>