<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000028'");
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
			<?php $book = '000028'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Sign of the Four (em português O signo dos quatro) é um romance policial escrito por Sir Arthur Conan Doyle, publicado originalmente pela Lippincott’s Magazine em fevereiro de 1890, sendo a primeira edição em formato de livro publicada em outubro do mesmo ano. É a segunda história da saga do detetive Sherlock Holmes.
					<hr>
				</div>
			</div>
			<?php $book = '000028'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'CONANdoyle'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>