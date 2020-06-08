<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='CONANdoyle'");
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

		<?php $user = 'CONANdoyle'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Arthur Ignatius Conan Doyle KGStJ, DL (Edimburgo, 22 de maio de 1859 — Crowborough, 7 de julho de 1930) foi um escritor e médico britânico, nascido na Escócia, <br />
			mundialmente famoso por suas 60 histórias sobre o detetive Sherlock Holmes,[1] consideradas uma grande inovação no campo da literatura criminal. <br />
			Foi um renomado e prolífico escritor cujos trabalhos incluem histórias de ficção científica, novelas históricas, peças e romances, poesias e obras de não-ficção. <br />
			<br />
			Arthur Conan Doyle viveu e escreveu parte de suas obras em Southsea, um bairro elegante de Portsmouth. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Arthur_Conan_Doyle' > Wikipedia </a>
		</div>
		<?php $auctor='CONANdoyle'; include '../design/poemfind.php'; ?>
		<?php $user = 'CONANdoyle'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>