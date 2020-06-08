<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001P'");
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
			<?php $book = '00001P'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					As Aventuras de Tom Sawyer (no original: The Adventures of Tom Sawyer) é um livro infanto juvenil publicado em 1876 pelo escritor estadunidense Mark Twain. O livro conta as aventuras do rapaz Tom Sawyer que vive com sua tia Polly, o irmão Sid e o amigo Huckleberry Finn.
					<hr>
				</div>
			</div>
			<?php $book = '00001P'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'TWAINmark'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>