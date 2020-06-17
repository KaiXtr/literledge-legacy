<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002D'");
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
			<?php $book = '00002D'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Frankenstein ou o Prometeu Moderno (Frankenstein: or the Modern Prometheus, no original em inglês), mais conhecido simplesmente por Frankenstein, é um romance de terror gótico com inspirações do movimento romântico, de autoria de Mary Shelley, escritora britânica nascida em Londres. É considerada a primeira obra de ficção científica da história.[1] O romance relata a história de Victor Frankenstein, um estudante de ciências naturais que constrói um monstro em seu laboratório. Mary Shelley escreveu a história quando tinha apenas 19 anos, entre 1816 e 1817, e a obra foi primeiramente publicada em 1818, sem crédito para a autora na primeira edição. Atualmente costuma-se considerar a versão revisada da terceira edição do livro, publicada em 1831, como a definitiva.

					O romance obteve grande sucesso e gerou todo um novo gênero de horror, tendo grande influência na literatura e cultura popular ocidental. O aclamado autor de literatura de terror Stephen King considerou Frankenstein um dos três grandes clássicos do gênero, sendo os outros dois Drácula e Strange Case of Dr Jekyll and Mr Hyde.[2] A obra está em domínio público e está disponível gratuitamente na Internet em língua inglesa.[3]
					<hr>
				</div>
			</div>
			<?php $book = '00002D'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'SHELLEYmary'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>