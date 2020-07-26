<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001T'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']].' - ';
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00001T'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Auto da Barca do Inferno (ou Auto da Moralidade) é uma complexa alegoria dramática de Gil Vicente, representada pela primeira vez em 1517. É a primeira parte da chamada trilogia das Barcas (sendo que a segunda e a terceira são respetivamente o Auto da Barca do Purgatório e o Auto da Barca da Glória).

					Os especialistas classificam-na como moralidade, mesmo que muitas vezes se aproxime da farsa. Ela proporciona uma amostra do que era a sociedade lisboeta das décadas iniciais do século XVI, embora alguns dos assuntos que cobre sejam pertinentes na atualidade.

					Diz-se \"Barca do Inferno\", porque quase todos os candidatos às duas barcas em cena – a do Inferno, com o seu Diabo, e a da Glória, com o Anjo – seguem na segunda. De facto, contudo, ela é muito mais o auto do julgamento das almas.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Auto da Barca do Inferno (ou Auto da Moralidade) é uma complexa alegoria dramática de Gil Vicente, representada pela primeira vez em 1517. É a primeira parte da chamada trilogia das Barcas (sendo que a segunda e a terceira são respetivamente o Auto da Barca do Purgatório e o Auto da Barca da Glória).

					Os especialistas classificam-na como moralidade, mesmo que muitas vezes se aproxime da farsa. Ela proporciona uma amostra do que era a sociedade lisboeta das décadas iniciais do século XVI, embora alguns dos assuntos que cobre sejam pertinentes na atualidade.

					Diz-se \"Barca do Inferno\", porque quase todos os candidatos às duas barcas em cena – a do Inferno, com o seu Diabo, e a da Glória, com o Anjo – seguem na segunda. De facto, contudo, ela é muito mais o auto do julgamento das almas.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Auto da Barca do Inferno (ou Auto da Moralidade) é uma complexa alegoria dramática de Gil Vicente, representada pela primeira vez em 1517. É a primeira parte da chamada trilogia das Barcas (sendo que a segunda e a terceira são respetivamente o Auto da Barca do Purgatório e o Auto da Barca da Glória).

					Os especialistas classificam-na como moralidade, mesmo que muitas vezes se aproxime da farsa. Ela proporciona uma amostra do que era a sociedade lisboeta das décadas iniciais do século XVI, embora alguns dos assuntos que cobre sejam pertinentes na atualidade.

					Diz-se \"Barca do Inferno\", porque quase todos os candidatos às duas barcas em cena – a do Inferno, com o seu Diabo, e a da Glória, com o Anjo – seguem na segunda. De facto, contudo, ela é muito mais o auto do julgamento das almas.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001T'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'VICENTEgil'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>