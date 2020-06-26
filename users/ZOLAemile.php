<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ZOLAemile'");
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

		<?php $user = 'ZOLAemile'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Émile Zola (Paris, 2 de abril de 1840 — Paris, 29 de setembro de 1902) foi um consagrado escritor francês, considerado criador e representante mais expressivo da escola literária naturalista além de uma importante figura libertária da França. Foi presumivelmente assassinado por desconhecidos em 1902, quatro anos depois de ter publicado o famoso artigo J'accuse, em que acusa os responsáveis pelo processo fraudulento de que Alfred Dreyfus foi vítima.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/%C3%89mile_Zola' > Wikipedia </a>
		</div>
		<?php $auctor='ZOLAemile'; include '../design/poemfind.php'; ?>
		<?php $user = 'ZOLAemile'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>