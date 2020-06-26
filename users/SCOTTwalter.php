<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='SCOTTwalter'");
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

		<?php $user = 'SCOTTwalter'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Sir Walter Scott, PRSE (Edimburgo, 15 de agosto de 1771 – 21 de setembro de 1832) foi o criador do verdadeiro romance histórico. É certo que, pouco antes dele, alguns autores, entre os quais avultou Maria Edgeworth com o seu curioso «Castelo de Rackrent», tinham procurado dar uma feição definitiva a essa modalidade literária, mas o público e a crítica não compreenderam a intenção.

			Walter Scott nasceu em Edimburgo e era filho de um advogado. Seu pai destinou-lhe a carreira de Direito, mas ele depressa a trocou pelos entusiasmos da literatura e pela adoração das antiguidades.

			Aos vinte e dois anos, Walter Scott era já considerado o primeiro poeta nacional, famoso pela «Canção do Último Menestrel», onde se adivinhava ligeiramente o surto que o seu espírito estava conseguindo. Foi um nacionalista favorável à causa jacobita, mesmo ciente de que tratava de uma "causa morta", conservador na política, favorável aos Tories[1]. E, de fato, passados tempos, estreava-se como romancista, apresentando anonimamente um volume intitulado «Waverley», no qual relatava o levantamento jacobita de 1745 e dava largas aos conhecimentos que adquirira durante longas pesquisas. O livro foi coroado do mais absoluto sucesso.

			Possuidor de uma energia inesgotável, ele escreveu sem descanso, oferecendo-nos obra sobre obra.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Walter_Scott' > Wikipedia </a>
		</div>
		<?php $auctor='SCOTTwalter'; include '../design/poemfind.php'; ?>
		<?php $user = 'SCOTTwalter'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>