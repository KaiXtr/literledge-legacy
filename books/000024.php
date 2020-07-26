<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000024'");
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
			<?php $book = '000024'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Fellowship of the Ring (br: A Sociedade do Anel / pt: A Irmandade do Anel) é o primeiro volume da trilogia O Senhor dos Anéis, escrita pelo professor e filólogo britânico J. R. R. Tolkien. Narra o início da história do Um Anel, tendo como principal aspecto a formação de uma Sociedade que deveria levar o Anel para a Montanha da Perdição a fim de destrui-lo.

					O livro é dividido em dois: o primeiro conta a história desde O Condado até a chegada em Valfenda, já o segundo conta da decisão de se criar uma Sociedade para levar o Anel até Mordor até o momento em que a sociedade se desfaz nas Cataratas de Rauros.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Fellowship of the Ring (br: A Sociedade do Anel / pt: A Irmandade do Anel) é o primeiro volume da trilogia O Senhor dos Anéis, escrita pelo professor e filólogo britânico J. R. R. Tolkien. Narra o início da história do Um Anel, tendo como principal aspecto a formação de uma Sociedade que deveria levar o Anel para a Montanha da Perdição a fim de destrui-lo.

					O livro é dividido em dois: o primeiro conta a história desde O Condado até a chegada em Valfenda, já o segundo conta da decisão de se criar uma Sociedade para levar o Anel até Mordor até o momento em que a sociedade se desfaz nas Cataratas de Rauros.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Fellowship of the Ring (br: A Sociedade do Anel / pt: A Irmandade do Anel) é o primeiro volume da trilogia O Senhor dos Anéis, escrita pelo professor e filólogo britânico J. R. R. Tolkien. Narra o início da história do Um Anel, tendo como principal aspecto a formação de uma Sociedade que deveria levar o Anel para a Montanha da Perdição a fim de destrui-lo.

					O livro é dividido em dois: o primeiro conta a história desde O Condado até a chegada em Valfenda, já o segundo conta da decisão de se criar uma Sociedade para levar o Anel até Mordor até o momento em que a sociedade se desfaz nas Cataratas de Rauros.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '000024'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'JRRTOLKIEN'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>