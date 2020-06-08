<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='SARTREjeanpaul'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['name'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'SARTREjeanpaul'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Jean-Paul Charles Aymard Sartre (Paris, 21 de junho de 1905 — Paris, 15 de abril de 1980) foi um filósofo, escritor e crítico francês, conhecido como representante do existencialismo. Acreditava que os intelectuais têm de desempenhar um papel ativo na sociedade. Era um artista militante, e apoiou causas políticas de esquerda com a sua vida e a sua obra.

				Repeliu as distinções e as funções problemáticas e, por estes motivos, se recusou a receber o Nobel de Literatura de 1964.[1] Sua filosofia dizia que no caso humano (e só no caso humano) a existência precede a essência, pois o homem primeiro existe, depois se define, enquanto todas as outras coisas são o que são, sem se definir, e por isso sem ter uma "essência" que suceda à existência.[2] Ele também é conhecido por seu relacionamento aberto que durou cerca de 51 anos (até sua morte) com a filósofa e escritora francesa Simone de Beauvoir.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Jean-Paul_Sartre' > Wikipedia </a>
			</div>
			<div class='manlan' lang='en'>
				Hot dog yea trup united states uhuuuu rockn roll <br />
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Esopo' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='SARTREjeanpaul'; include '../design/poemfind.php'; ?>
		<?php $user = 'SARTREjeanpaul'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>