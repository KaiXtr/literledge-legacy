<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='CERVANTESmiguel'");
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

		<?php $user = 'CERVANTESmiguel'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Miguel de Cervantes Saavedra[a] (Alcalá de Henares, 29 de setembro de 1547 – Madrid, 22 de abril de 1616)[1] foi um romancista, dramaturgo e poeta castelhano. <br />
			A sua obra-prima, Dom Quixote, muitas vezes considerada o primeiro romance moderno,[2] é um clássico da literatura ocidental e é regularmente considerada um dos melhores <br />
			romances já escritos.[3] O seu trabalho é considerado entre os mais importantes em toda a literatura,[3] e sua influência sobre a língua castelhana tem sido tão grande <br />
			que o castelhano é frequentemente chamado de La lengua de Cervantes (A língua de Cervantes).[4] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Miguel_de_Cervantes' > Wikipedia </a>
		</div>
		<?php $auctor='CERVANTESmiguel'; include '../design/poemfind.php'; ?>
		<?php $user = 'CERVANTESmiguel'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>