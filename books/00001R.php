<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001R'");
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
			<?php $book = '00001R'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Patinho Feio (em dinamarquês Den grimme ælling) é um conto de fadas do escritor dinamarquês Hans Christian Andersen, publicado pela primeira vez em 11 de Novembro de 1843 em Nye Eventyr. Første Bind. Første Samling. 1844.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Patinho Feio (em dinamarquês Den grimme ælling) é um conto de fadas do escritor dinamarquês Hans Christian Andersen, publicado pela primeira vez em 11 de Novembro de 1843 em Nye Eventyr. Første Bind. Første Samling. 1844.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Patinho Feio (em dinamarquês Den grimme ælling) é um conto de fadas do escritor dinamarquês Hans Christian Andersen, publicado pela primeira vez em 11 de Novembro de 1843 em Nye Eventyr. Første Bind. Første Samling. 1844.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001R'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ANDERSENhans'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>