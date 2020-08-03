<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ANJOSaugusto'");
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

		<?php $user = 'ANJOSaugusto'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Augusto de Carvalho Rodrigues dos Anjos (Sapé, 20 de abril de 1884 — Leopoldina, 12 de novembro de 1914) foi um poeta brasileiro, identificado muitas vezes como simbolista ou parnasiano. Todavia, muitos críticos, como o poeta Ferreira Gullar, preferem identificá-lo como pré-modernista, pois encontramos características nitidamente expressionistas em seus poemas.

			É conhecido como um dos poetas mais críticos do seu tempo, focando suas críticas ao idealismo egocentrista que se emergia em sua época, e até hoje sua obra é admirada tanto por leigos como por críticos literários

			É patrono da cadeira número 1 da Academia Paraibana de Letras (APL), que teve como fundador o jurista e ensaísta José Flósculo da Nóbrega e como primeiro ocupante o seu biógrafo Humberto Nóbrega, sendo ocupada, atualmente, por José Nêumanne Pinto. Augusto dos Anjos também é o patrono da Academia Leopoldinense de Letras e Artes.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Augusto_dos_Anjos'> Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Augusto de Carvalho Rodrigues dos Anjos (Sapé, 20 de abril de 1884 — Leopoldina, 12 de novembro de 1914) foi um poeta brasileiro, identificado muitas vezes como simbolista ou parnasiano. Todavia, muitos críticos, como o poeta Ferreira Gullar, preferem identificá-lo como pré-modernista, pois encontramos características nitidamente expressionistas em seus poemas.

			É conhecido como um dos poetas mais críticos do seu tempo, focando suas críticas ao idealismo egocentrista que se emergia em sua época, e até hoje sua obra é admirada tanto por leigos como por críticos literários

			É patrono da cadeira número 1 da Academia Paraibana de Letras (APL), que teve como fundador o jurista e ensaísta José Flósculo da Nóbrega e como primeiro ocupante o seu biógrafo Humberto Nóbrega, sendo ocupada, atualmente, por José Nêumanne Pinto. Augusto dos Anjos também é o patrono da Academia Leopoldinense de Letras e Artes.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Augusto_dos_Anjos'> Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Augusto de Carvalho Rodrigues dos Anjos (Sapé, 20 de abril de 1884 — Leopoldina, 12 de novembro de 1914) foi um poeta brasileiro, identificado muitas vezes como simbolista ou parnasiano. Todavia, muitos críticos, como o poeta Ferreira Gullar, preferem identificá-lo como pré-modernista, pois encontramos características nitidamente expressionistas em seus poemas.

			É conhecido como um dos poetas mais críticos do seu tempo, focando suas críticas ao idealismo egocentrista que se emergia em sua época, e até hoje sua obra é admirada tanto por leigos como por críticos literários

			É patrono da cadeira número 1 da Academia Paraibana de Letras (APL), que teve como fundador o jurista e ensaísta José Flósculo da Nóbrega e como primeiro ocupante o seu biógrafo Humberto Nóbrega, sendo ocupada, atualmente, por José Nêumanne Pinto. Augusto dos Anjos também é o patrono da Academia Leopoldinense de Letras e Artes.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Augusto_dos_Anjos'> Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='ANJOSaugusto'; include '../design/poemfind.php'; ?>
		<?php $user = 'ANJOSaugusto'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>