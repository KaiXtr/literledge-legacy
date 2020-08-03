<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000018'");
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
			<?php $book = '000018'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Metamorfose (Die Verwandlung em alemão) é uma novela escrita por Franz Kafka, publicada pela primeira vez em 1915.

					Veio a ser o texto mais conhecido, estudado e citado da obra de Kafka. Apesar de ter sido publicada em 1915, foi escrita em novembro de 1912 e concluída em vinte dias.

					Em 7 de dezembro de 1912, Kafka escrevia à sua noiva, Felice Bauer: \"Minha pequena história está terminada\".
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>: </b>.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Metamorfose (Die Verwandlung em alemão) é uma novela escrita por Franz Kafka, publicada pela primeira vez em 1915.

					Veio a ser o texto mais conhecido, estudado e citado da obra de Kafka. Apesar de ter sido publicada em 1915, foi escrita em novembro de 1912 e concluída em vinte dias.

					Em 7 de dezembro de 1912, Kafka escrevia à sua noiva, Felice Bauer: \"Minha pequena história está terminada\".
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>: </b>.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Metamorfose (Die Verwandlung em alemão) é uma novela escrita por Franz Kafka, publicada pela primeira vez em 1915.

					Veio a ser o texto mais conhecido, estudado e citado da obra de Kafka. Apesar de ter sido publicada em 1915, foi escrita em novembro de 1912 e concluída em vinte dias.

					Em 7 de dezembro de 1912, Kafka escrevia à sua noiva, Felice Bauer: \"Minha pequena história está terminada\".
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>: </b>.</li>
					</ul>
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '000018'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'KAFKAfranz'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>