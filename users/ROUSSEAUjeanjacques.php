<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ROUSSEAUjeanjacques'");
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

		<?php $user = 'ROUSSEAUjeanjacques'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Jean-Jacques Rousseau, também conhecido como J.J. Rousseau ou simplesmente Rousseau (Genebra, 28 de junho de 1712 — Ermenonville, 2 de julho de 1778), foi um importante filósofo, teórico político, escritor e compositor autodidata genebrino. É considerado um dos principais filósofos do iluminismo e um precursor do romantismo.

				Sua filosofia política de fato influenciou o Iluminismo por toda a Europa, assim como também aspectos da Revolução Francesa e o desenvolvimento moderno da economia, da política e do pensamento educacional.

				Para ele, as instituições educativas tradicionais corrompem o homem e tiram-lhe a liberdade. Para a criação de um novo homem e de uma nova sociedade, seria preciso educar a criança de acordo com a Natureza, desenvolvendo progressivamente seus sentidos e a razão com vistas à liberdade e à capacidade de julgar.[1]
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Jean-Jacques_Rousseau' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='ROUSSEAUjeanjacques'; include '../design/poemfind.php'; ?>
		<?php $user = 'ROUSSEAUjeanjacques'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>