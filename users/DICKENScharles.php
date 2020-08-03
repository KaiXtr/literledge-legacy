<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='DICKENScharles'");
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

		<?php $user = 'DICKENScharles'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Charles John Huffam Dickens (Landport, 7 de fevereiro de 1812 — Higham, 9 de junho de 1870) foi o mais popular dos romancistas ingleses da era vitoriana. No início de sua atividade literária também adotou o apelido Boz. A fama dos seus romances e contos, tanto durante a sua vida como depois, até aos dias de hoje, só aumentou. Apesar de os seus romances não serem considerados, pelos parâmetros atuais, muito realistas, Dickens contribuiu em grande parte para a introdução da crítica social na literatura de ficção inglesa.

			Entre os seus maiores clássicos estão David Copperfield e Oliver Twist.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Charles_Dickens' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Charles John Huffam Dickens (Landport, 7 de fevereiro de 1812 — Higham, 9 de junho de 1870) foi o mais popular dos romancistas ingleses da era vitoriana. No início de sua atividade literária também adotou o apelido Boz. A fama dos seus romances e contos, tanto durante a sua vida como depois, até aos dias de hoje, só aumentou. Apesar de os seus romances não serem considerados, pelos parâmetros atuais, muito realistas, Dickens contribuiu em grande parte para a introdução da crítica social na literatura de ficção inglesa.

			Entre os seus maiores clássicos estão David Copperfield e Oliver Twist.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Charles_Dickens' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Charles John Huffam Dickens (Landport, 7 de fevereiro de 1812 — Higham, 9 de junho de 1870) foi o mais popular dos romancistas ingleses da era vitoriana. No início de sua atividade literária também adotou o apelido Boz. A fama dos seus romances e contos, tanto durante a sua vida como depois, até aos dias de hoje, só aumentou. Apesar de os seus romances não serem considerados, pelos parâmetros atuais, muito realistas, Dickens contribuiu em grande parte para a introdução da crítica social na literatura de ficção inglesa.

			Entre os seus maiores clássicos estão David Copperfield e Oliver Twist.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Charles_Dickens' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='DICKENScharles'; include '../design/poemfind.php'; ?>
		<?php $user = 'DICKENScharles'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>