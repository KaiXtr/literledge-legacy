<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='PYLEhoward'");
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

		<?php $user = 'PYLEhoward'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Howard Pyle (Wilmington, 5 de março de 1853 - Florença, 9 de novembro de 1911) foi um ilustrador norte-americano, um dos mais famosos do seu tempo.[1]

			Durante sua carreira, realizou trabalhos para revistas como Harper's Monthly, Collier's Weekly, St. Nicholas e Scribner's Magazine, além de ilustrar obras de Mark Twain, Robert Louis Stevenson e Oliver Wendell Holmes, poesia de William Dean Howells e obras historiográficas de Henry Cabot Lodge and Woodrow Wilson.[1]

			Suas ilustrações influenciaram o desenho cinematográfico de filmes sobre piratas e temas medievais, como os que estrelou Errol Flynn. Ao falecer, o New York Times celebrou-o como o \"pai da ilustração americana como a conhecemos hoje\".
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Howard_Pyle' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Howard Pyle (Wilmington, 5 de março de 1853 - Florença, 9 de novembro de 1911) foi um ilustrador norte-americano, um dos mais famosos do seu tempo.[1]

			Durante sua carreira, realizou trabalhos para revistas como Harper's Monthly, Collier's Weekly, St. Nicholas e Scribner's Magazine, além de ilustrar obras de Mark Twain, Robert Louis Stevenson e Oliver Wendell Holmes, poesia de William Dean Howells e obras historiográficas de Henry Cabot Lodge and Woodrow Wilson.[1]

			Suas ilustrações influenciaram o desenho cinematográfico de filmes sobre piratas e temas medievais, como os que estrelou Errol Flynn. Ao falecer, o New York Times celebrou-o como o \"pai da ilustração americana como a conhecemos hoje\".
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Howard_Pyle' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Howard Pyle (Wilmington, 5 de março de 1853 - Florença, 9 de novembro de 1911) foi um ilustrador norte-americano, um dos mais famosos do seu tempo.[1]

			Durante sua carreira, realizou trabalhos para revistas como Harper's Monthly, Collier's Weekly, St. Nicholas e Scribner's Magazine, além de ilustrar obras de Mark Twain, Robert Louis Stevenson e Oliver Wendell Holmes, poesia de William Dean Howells e obras historiográficas de Henry Cabot Lodge and Woodrow Wilson.[1]

			Suas ilustrações influenciaram o desenho cinematográfico de filmes sobre piratas e temas medievais, como os que estrelou Errol Flynn. Ao falecer, o New York Times celebrou-o como o \"pai da ilustração americana como a conhecemos hoje\".
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Howard_Pyle' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='PYLEhoward'; include '../design/poemfind.php'; ?>
		<?php $user = 'PYLEhoward'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>