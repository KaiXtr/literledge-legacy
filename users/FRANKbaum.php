<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='FRANKbaum'");
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

		<?php $user = 'FRANKbaum'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Lyman Frank Baum, mais conhecido como L. Frank Baum (Chittenango, 15 de maio de 1856 — Hollywood, 6 de maio de 1919), foi um escritor, editor, ator, roteirista, <br />
			produtor de cinema e teosofista norte-americano. Foi criador de um dos mais populares livros escritos na literatura americana infantil, O Mágico de Oz. <br />
			Em 1897, tornou-se membro da Sociedade Teosófica, incorporando frequentemente em seus livros temas e símbolos desta doutrina. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/L._Frank_Baum' > Wikipedia </a>
		</div>
		<?php $auctor='FRANKbaum'; include '../design/poemfind.php'; ?>
		<?php $user = 'FRANKbaum'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>