<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='BOCAGEbarbosa'");
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

		<?php $user = 'BOCAGEbarbosa'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Manuel Maria de Barbosa l'Hedois du Bocage (Setúbal, 15 de setembro de 1765 – Lisboa, Mercês, 21 de dezembro de 1805) foi um poeta nacional português e, possivelmente, o maior representante do arcadismo lusitano.[1] Embora ícone deste movimento literário, é uma figura inserida num período de transição do estilo clássico para o estilo romântico que terá forte presença na literatura portuguesa do século XIX.[2] Era primo em segundo grau do zoólogo José Vicente Barbosa du Bocage.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Manuel_Maria_Barbosa_du_Bocage' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='BOCAGEbarbosa'; include '../design/poemfind.php'; ?>
		<?php $user = 'BOCAGEbarbosa'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>