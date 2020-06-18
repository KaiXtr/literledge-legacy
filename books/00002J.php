<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002J'");
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
			<?php $book = '00002J'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Caramuru. Poema Épico do Descobrimento da Bahia é um poema épico do frei Santa Rita Durão, escrito em 1781.

					Conta a história de Diogo Álvares Correia, o "Caramuru", um náufrago português que viveu entre os Tupinambás. O livro alude também a sua esposa, Catarina Paraguaçu, como visionária capaz de prever as guerras contra os neerlandeses. Os escritos seguem a inspiração de Luís Vaz de Camões, utilizando-se de sonhos e previsões, e tem grande valor por incluir informações sobre os povos indígenas brasileiros.

					Além de relatar a trajetória de Caramuru, refere outros fatos da história do Brasil. É uma obra essencial para o estudo da literatura brasileira arcadista.
					<hr>
				</div>
			</div>
			<?php $book = '00002J'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'STRITAdurao'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>