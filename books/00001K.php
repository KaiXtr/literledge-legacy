<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001K'");
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
			<?php $book = '00001K'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Urupês é uma coletânea de contos e crônicas do escritor brasileiro Monteiro Lobato, considerada sua obra-prima e publicada originalmente em 1918. Inaugura na literatura brasileira um regionalismo crítico e mais realista do que o praticado anteriormente, durante o romantismo.[1] A crônica que dá título ao livro traz uma visão depreciativa do caboclo brasileiro, chamado pelo autor de "fazedor de desertos", estereótipo contrário à visão romântica dos autores modernistas.
					<hr>
				</div>
			</div>
			<?php $book = '00001K'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'LOBATOmonteiro'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>