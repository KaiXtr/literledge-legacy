<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='MANNthomas'");
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

		<?php $user = 'MANNthomas'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Paul Thomas Mann (Cidade Livre de Lübeck, 6 de junho de 1875 — Zurique, 12 de agosto de 1955) foi um escritor, romancista, ensaísta, contista e crítico social do Império Alemão.

			Tendo recebido o Nobel de Literatura de 1929, é considerado um dos maiores romancistas do século XX. Irmão mais novo do também romancista Heinrich Mann, Thomas Mann teve seis filhos: o escritor Klaus, a atriz Erika, o historiador Golo Mann, a ensaísta Monika Mann, o violinista e literato Michael Thomas Mann[1] e a cientista Elisabeth Mann.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Thomas_Mann' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Paul Thomas Mann (Cidade Livre de Lübeck, 6 de junho de 1875 — Zurique, 12 de agosto de 1955) foi um escritor, romancista, ensaísta, contista e crítico social do Império Alemão.

			Tendo recebido o Nobel de Literatura de 1929, é considerado um dos maiores romancistas do século XX. Irmão mais novo do também romancista Heinrich Mann, Thomas Mann teve seis filhos: o escritor Klaus, a atriz Erika, o historiador Golo Mann, a ensaísta Monika Mann, o violinista e literato Michael Thomas Mann[1] e a cientista Elisabeth Mann.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Thomas_Mann' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Paul Thomas Mann (Cidade Livre de Lübeck, 6 de junho de 1875 — Zurique, 12 de agosto de 1955) foi um escritor, romancista, ensaísta, contista e crítico social do Império Alemão.

			Tendo recebido o Nobel de Literatura de 1929, é considerado um dos maiores romancistas do século XX. Irmão mais novo do também romancista Heinrich Mann, Thomas Mann teve seis filhos: o escritor Klaus, a atriz Erika, o historiador Golo Mann, a ensaísta Monika Mann, o violinista e literato Michael Thomas Mann[1] e a cientista Elisabeth Mann.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Thomas_Mann' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='MANNthomas'; include '../design/poemfind.php'; ?>
		<?php $user = 'MANNthomas'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>