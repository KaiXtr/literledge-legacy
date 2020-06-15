<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002B'");
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
			<?php $book = '00002B'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Charlie and the Chocolate Factory (Brasil: A Fantástica Fábrica de Chocolate /Portugal: Charlie e a Fábrica de Chocolate) é um livro infantil de autoria do escritor galês Roald Dahl, escrito em 1964.	

					Charlie and the Chocolate Factory foi publicado pela primeira vez nos Estados Unidos pela Alfred A. Knopf, Inc. em 1964 e no Reino Unido por George Allen & Unwin, onze meses depois. O livro foi adaptado em dois grandes filmes: Willy Wonka & the Chocolate Factory em 1971, e Charlie and the Chocolate Factory em 2005. A sequência do livro, Charlie and the Great Glass Elevator, foi escrita por Roald Dahl em 1971 e publicada em 1972. Dahl também planejou escrever um terceiro livro da série, mas nunca terminou.[1]
					<hr>
				</div>
			</div>
			<?php $book = '00002B'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'DAHLroald'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>