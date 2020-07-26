<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001F'");
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
			<?php $book = '00001F'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Povo Brasileiro é uma obra do antropólogo brasileiro Darcy Ribeiro, lançada em 1995, que aborda a história da formação do povo brasileiro.

					O livro trata das matrizes culturais e dos mecanismos de formação étnica e cultural do povo brasileiro.

					No prefácio da primeira edição, de 1995, Darcy Ribeiro afirma que escrever este livro \"foi o maior desafio\" que se propôs. Demorou 30 anos para escreve-lo. Segundo Darcy, o livro unifica uma teoria de base empírica de classes sociais no brasil e na américa latina; uma tipologia das formas de exercício do poder e de militância política; e uma teoria de cultura.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Povo Brasileiro é uma obra do antropólogo brasileiro Darcy Ribeiro, lançada em 1995, que aborda a história da formação do povo brasileiro.

					O livro trata das matrizes culturais e dos mecanismos de formação étnica e cultural do povo brasileiro.

					No prefácio da primeira edição, de 1995, Darcy Ribeiro afirma que escrever este livro \"foi o maior desafio\" que se propôs. Demorou 30 anos para escreve-lo. Segundo Darcy, o livro unifica uma teoria de base empírica de classes sociais no brasil e na américa latina; uma tipologia das formas de exercício do poder e de militância política; e uma teoria de cultura.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Povo Brasileiro é uma obra do antropólogo brasileiro Darcy Ribeiro, lançada em 1995, que aborda a história da formação do povo brasileiro.

					O livro trata das matrizes culturais e dos mecanismos de formação étnica e cultural do povo brasileiro.

					No prefácio da primeira edição, de 1995, Darcy Ribeiro afirma que escrever este livro \"foi o maior desafio\" que se propôs. Demorou 30 anos para escreve-lo. Segundo Darcy, o livro unifica uma teoria de base empírica de classes sociais no brasil e na américa latina; uma tipologia das formas de exercício do poder e de militância política; e uma teoria de cultura.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001F'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'RIBEIROdarcy'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>