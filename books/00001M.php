<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001M'");
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
			<?php $book = '00001M'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Reinações de Narizinho é um livro de fantasia e infantil de autoria do escritor brasileiro Monteiro Lobato.[1] Publicado em 1931, é o livro que serve de propulsor à série que seria protagonizada no Sítio do Picapau Amarelo. É um clássico da literatura, e até hoje serve de inspiração para muitos autores infantis, como Ana Maria Machado, Ruth Rocha, Pedro Bandeira e muitos outros.

					O livro é composto de várias pequenas histórias, previamente publicadas, compostas em capítulos. Algumas histórias são plenamente originais, enquanto outras histórias são combinações utilizando histórias e personagens já conhecidos, como a visita dos personagens do Mundo das Maravilhas, incluindo as princesas Branca de Neve, Cinderela e Aladim.
					<hr>
				</div>
			</div>
			<?php $book = '00001M'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'LOBATOmonteiro'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>