<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002K'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']];
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00002K'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Livro da Selva (The Jungle Book originalmente) é o título de um livro publicado em 1894, constituído de uma coleção de 7 contos do escritor Rudyard Kipling, inicialmente publicadas em revistas de 1893 e 1894. As publicações originais contêm ilustrações, algumas do pai de Rudyard, John Lockwood Kipling. O livro foi escrito quando Rudyard morava em Vermont. Dos 7 contos, os 3 primeiros relatam a história de Mogli, um rapaz indiano criado por lobos. O livro é mais conhecido por ter sido adaptado em um filme animado produzido pela Walt Disney Company e lançado em 1967. No Brasil, o livro foi publicado pela primeira vez em 1933 pela Companhia Editora Nacional como parte da Coleção Terramarear e foi traduzido pelo escritor Monteiro Lobato e foi intitulado O Livro da Jângal.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Livro da Selva (The Jungle Book originalmente) é o título de um livro publicado em 1894, constituído de uma coleção de 7 contos do escritor Rudyard Kipling, inicialmente publicadas em revistas de 1893 e 1894. As publicações originais contêm ilustrações, algumas do pai de Rudyard, John Lockwood Kipling. O livro foi escrito quando Rudyard morava em Vermont. Dos 7 contos, os 3 primeiros relatam a história de Mogli, um rapaz indiano criado por lobos. O livro é mais conhecido por ter sido adaptado em um filme animado produzido pela Walt Disney Company e lançado em 1967. No Brasil, o livro foi publicado pela primeira vez em 1933 pela Companhia Editora Nacional como parte da Coleção Terramarear e foi traduzido pelo escritor Monteiro Lobato e foi intitulado O Livro da Jângal.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Livro da Selva (The Jungle Book originalmente) é o título de um livro publicado em 1894, constituído de uma coleção de 7 contos do escritor Rudyard Kipling, inicialmente publicadas em revistas de 1893 e 1894. As publicações originais contêm ilustrações, algumas do pai de Rudyard, John Lockwood Kipling. O livro foi escrito quando Rudyard morava em Vermont. Dos 7 contos, os 3 primeiros relatam a história de Mogli, um rapaz indiano criado por lobos. O livro é mais conhecido por ter sido adaptado em um filme animado produzido pela Walt Disney Company e lançado em 1967. No Brasil, o livro foi publicado pela primeira vez em 1933 pela Companhia Editora Nacional como parte da Coleção Terramarear e foi traduzido pelo escritor Monteiro Lobato e foi intitulado O Livro da Jângal.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00002K'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'KIPLINGrudyard'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>