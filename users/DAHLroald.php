<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='DAHLroald'");
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

		<?php $user = 'DAHLroald'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Roald Dahl (Llandaff, 13 de Setembro de 1916 — Oxford, 23 de Novembro de 1990) foi um escritor britânico nascido no País de Gales, filho de noruegueses. Atingiu notoriedade na década de 1940 por suas obras para adultos e crianças e tornou-se um dos escritores mais aclamados do mundo. É conhecido principalmente por seus livros infantis, entre os quais figuram Charlie e a Fábrica de Chocolate, Matilda, As Bruxas, O Bom Gigante Amigo e James e o Pêssego Gigante. Várias de suas obras foram adaptadas para o cinema.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Roald_Dahl' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Roald Dahl (Llandaff, 13 de Setembro de 1916 — Oxford, 23 de Novembro de 1990) foi um escritor britânico nascido no País de Gales, filho de noruegueses. Atingiu notoriedade na década de 1940 por suas obras para adultos e crianças e tornou-se um dos escritores mais aclamados do mundo. É conhecido principalmente por seus livros infantis, entre os quais figuram Charlie e a Fábrica de Chocolate, Matilda, As Bruxas, O Bom Gigante Amigo e James e o Pêssego Gigante. Várias de suas obras foram adaptadas para o cinema.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Roald_Dahl' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Roald Dahl (Llandaff, 13 de Setembro de 1916 — Oxford, 23 de Novembro de 1990) foi um escritor britânico nascido no País de Gales, filho de noruegueses. Atingiu notoriedade na década de 1940 por suas obras para adultos e crianças e tornou-se um dos escritores mais aclamados do mundo. É conhecido principalmente por seus livros infantis, entre os quais figuram Charlie e a Fábrica de Chocolate, Matilda, As Bruxas, O Bom Gigante Amigo e James e o Pêssego Gigante. Várias de suas obras foram adaptadas para o cinema.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Roald_Dahl' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='DAHLroald'; include '../design/poemfind.php'; ?>
		<?php $user = 'DAHLroald'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>