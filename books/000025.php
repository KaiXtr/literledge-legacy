<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000025'");
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
			<?php $book = '000025'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As Duas Torres, no original em inglês The Two Towers, é o segundo volume da trilogia de fantasia O Senhor dos Anéis, do filólogo e professor britânico J. R. R. Tolkien. Narra a continuação da história desde o rompimento da Sociedade do Anel. O título do livro trata das Torres de Orthanc (Isengard) e Minas Morgul.

					No incio de As Duas Torres vemos o rompimento da Sociedade e a morte gloriosa de Boromir. Antes de morrer, Boromir lutou bravamente protegendo os hobbits e matou muitos orcs.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As Duas Torres, no original em inglês The Two Towers, é o segundo volume da trilogia de fantasia O Senhor dos Anéis, do filólogo e professor britânico J. R. R. Tolkien. Narra a continuação da história desde o rompimento da Sociedade do Anel. O título do livro trata das Torres de Orthanc (Isengard) e Minas Morgul.

					No incio de As Duas Torres vemos o rompimento da Sociedade e a morte gloriosa de Boromir. Antes de morrer, Boromir lutou bravamente protegendo os hobbits e matou muitos orcs.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As Duas Torres, no original em inglês The Two Towers, é o segundo volume da trilogia de fantasia O Senhor dos Anéis, do filólogo e professor britânico J. R. R. Tolkien. Narra a continuação da história desde o rompimento da Sociedade do Anel. O título do livro trata das Torres de Orthanc (Isengard) e Minas Morgul.

					No incio de As Duas Torres vemos o rompimento da Sociedade e a morte gloriosa de Boromir. Antes de morrer, Boromir lutou bravamente protegendo os hobbits e matou muitos orcs.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '000025'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'JRRTOLKIEN'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>