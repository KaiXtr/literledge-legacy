<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000026'");
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
			<?php $book = '000026'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Retorno do Rei, no original em inglês The Return of the King, é o terceiro e último volume de O Senhor dos Anéis, de J. R. R. Tolkien, seguindo A Sociedade do Anel e As Duas Torres. A história começa no reino de Gondor, que está prestes a ser atacado por Sauron, o Senhor do Escuro. O guardião humano da floresta, Aragorn sai em busca do exército perdido dos perjuros mortos-vivos. As hostes de Mordor rompem os portões de Minas Tirith, mas por sua vez são esmagados pela cavalaria chegando de Rohan. O mago Gandalf e Aragorn decidem tirar as hostes de Mordor com um ataque ao Portão Negro, proporcionando uma distração para que os dois hobbits, Frodo e Sam, possam ter a chance de alcançar a Montanha da Perdição e destruir o Um Anel, sem ser vistos pelo Olho de Sauron. Sam, que agora tem o Um Anel no lugar de Frodo, resgata seu mestre da tortura e morte por Orcs. Depois, Gollum se regozija após tomar de volta seu \"precioso\", mas acaba perdendo o equilíbrio e cai nas chamas da Montanha para sua morte, levando o anel consigo. Ele é finalmente destruído, libertando a Terra-média do poder de Sauron.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Retorno do Rei, no original em inglês The Return of the King, é o terceiro e último volume de O Senhor dos Anéis, de J. R. R. Tolkien, seguindo A Sociedade do Anel e As Duas Torres. A história começa no reino de Gondor, que está prestes a ser atacado por Sauron, o Senhor do Escuro. O guardião humano da floresta, Aragorn sai em busca do exército perdido dos perjuros mortos-vivos. As hostes de Mordor rompem os portões de Minas Tirith, mas por sua vez são esmagados pela cavalaria chegando de Rohan. O mago Gandalf e Aragorn decidem tirar as hostes de Mordor com um ataque ao Portão Negro, proporcionando uma distração para que os dois hobbits, Frodo e Sam, possam ter a chance de alcançar a Montanha da Perdição e destruir o Um Anel, sem ser vistos pelo Olho de Sauron. Sam, que agora tem o Um Anel no lugar de Frodo, resgata seu mestre da tortura e morte por Orcs. Depois, Gollum se regozija após tomar de volta seu \"precioso\", mas acaba perdendo o equilíbrio e cai nas chamas da Montanha para sua morte, levando o anel consigo. Ele é finalmente destruído, libertando a Terra-média do poder de Sauron.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Retorno do Rei, no original em inglês The Return of the King, é o terceiro e último volume de O Senhor dos Anéis, de J. R. R. Tolkien, seguindo A Sociedade do Anel e As Duas Torres. A história começa no reino de Gondor, que está prestes a ser atacado por Sauron, o Senhor do Escuro. O guardião humano da floresta, Aragorn sai em busca do exército perdido dos perjuros mortos-vivos. As hostes de Mordor rompem os portões de Minas Tirith, mas por sua vez são esmagados pela cavalaria chegando de Rohan. O mago Gandalf e Aragorn decidem tirar as hostes de Mordor com um ataque ao Portão Negro, proporcionando uma distração para que os dois hobbits, Frodo e Sam, possam ter a chance de alcançar a Montanha da Perdição e destruir o Um Anel, sem ser vistos pelo Olho de Sauron. Sam, que agora tem o Um Anel no lugar de Frodo, resgata seu mestre da tortura e morte por Orcs. Depois, Gollum se regozija após tomar de volta seu \"precioso\", mas acaba perdendo o equilíbrio e cai nas chamas da Montanha para sua morte, levando o anel consigo. Ele é finalmente destruído, libertando a Terra-média do poder de Sauron.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '000026'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'JRRTOLKIEN'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>