<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002A'");
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
			<?php $book = '00002A'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Valley of Fear (no Brasil, O vale do terror / em Portugal, O vale do medo) é um romance policial de autoria de Sir Arthur Conan Doyle com o personagem Sherlock Holmes. Foi publicado pela primeira vez na Strand Magazine, entre setembro de 1914 e maio de 1915, na forma de folhetim. A primeira edição em livro foi lançada em fevereiro de 1915, por G. H. Doran Co., de Nova Iorque. A primeira edição britânica foi lançada por Smith, Elder & Co., em 3 de junho, com tiragem de seis mil cópias.

					A história com o assassinato. Sherlock Holmes analisa meticulosamente o corpo, o local do crime e as pessoas relacionadas, chegando ainda na primeira parte do livro a uma conclusão. A segunda parte é usada para descrever as circunstâncias em que se deu a história, e o epílogo.

					Sir Arthur Conan Doyle já havia utilizado esta "técnica" em Um estudo em vermelho.
					<hr>
				</div>
			</div>
			<?php $book = '00002A'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'CONANdoyle'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>