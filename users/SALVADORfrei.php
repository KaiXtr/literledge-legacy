<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='SALVADORfrei'");
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

		<?php $user = 'SALVADORfrei'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Frei Vicente do Salvador, OFM, nascido Vicente Rodrigues Palha (Matuim, Salvador, circa 1564 — Salvador, circa 1636-1639) foi um religioso franciscano brasileiro.

			Sua vida é pobremente conhecida e sua fama repousa sobre dois escritos, Crônica da Custódia do Brasil, e principalmente a História do Brasil (1627), valiosos relatos históricos e corográficos sobre a vasta colônia portuguesa na América em seus primeiros tempos. Este legado documental, cuja importância a crítica reconhece em consenso, lhe valeu os epítetos de Pai da Historiografia brasileira,[1][2] ou Heródoto brasileiro.[3] Sua vida como religioso também foi relevante, recebendo várias atribuições de responsabilidade e fundando o convento de Santo Antônio do Rio de Janeiro.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Vicente_do_Salvador'> Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Frei Vicente do Salvador, OFM, nascido Vicente Rodrigues Palha (Matuim, Salvador, circa 1564 — Salvador, circa 1636-1639) foi um religioso franciscano brasileiro.

			Sua vida é pobremente conhecida e sua fama repousa sobre dois escritos, Crônica da Custódia do Brasil, e principalmente a História do Brasil (1627), valiosos relatos históricos e corográficos sobre a vasta colônia portuguesa na América em seus primeiros tempos. Este legado documental, cuja importância a crítica reconhece em consenso, lhe valeu os epítetos de Pai da Historiografia brasileira,[1][2] ou Heródoto brasileiro.[3] Sua vida como religioso também foi relevante, recebendo várias atribuições de responsabilidade e fundando o convento de Santo Antônio do Rio de Janeiro.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Vicente_do_Salvador'> Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Frei Vicente do Salvador, OFM, nascido Vicente Rodrigues Palha (Matuim, Salvador, circa 1564 — Salvador, circa 1636-1639) foi um religioso franciscano brasileiro.

			Sua vida é pobremente conhecida e sua fama repousa sobre dois escritos, Crônica da Custódia do Brasil, e principalmente a História do Brasil (1627), valiosos relatos históricos e corográficos sobre a vasta colônia portuguesa na América em seus primeiros tempos. Este legado documental, cuja importância a crítica reconhece em consenso, lhe valeu os epítetos de Pai da Historiografia brasileira,[1][2] ou Heródoto brasileiro.[3] Sua vida como religioso também foi relevante, recebendo várias atribuições de responsabilidade e fundando o convento de Santo Antônio do Rio de Janeiro.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Vicente_do_Salvador'> Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='SALVADORfrei'; include '../design/poemfind.php'; ?>
		<?php $user = 'SALVADORfrei'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>