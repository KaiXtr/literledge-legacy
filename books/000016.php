<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000016'");
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
			<?php $book = '000016'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Conde de Monte Cristo (título original em francês: Le Comte de Monte-Cristo) é um romance da literatura francesa escrito por Alexandre Dumas (pai) em colaboração com Auguste Maquet e concluído em 1844. Inicialmente publicado como Folhetim de 1844 a 1846 (primeira parte: do 28 de Agosto ao 19 de Outubro de 1844, Segunda parte: do 31 de Outubro ao 26 de Novembro de 1844, Terceira parte: do 20 de Junho 1845 ao 15 de Janeiro de 1846), o livro conta a história de um marinheiro que foi preso injustamente. Lá, conhece o abade faria de quem fica amigo. Quando o abade faria morre, ele escapa da prisão e toma posse de uma misteriosa fortuna. O marinheiro, agora em condições financeiras, pode vingar-se daqueles que o levaram à vida de prisioneiro. A história é livremente inspirada por fatos da vida de Pierre Picaud.

					É considerado, juntamente com Os Três Mosqueteiros, uma das mais populares obras de Dumas, e é frequentemente incluída nas listas de livros mais vendidos de todos os tempos. O nome do romance surgiu quando Dumas a caminho da Ilha Monte-Cristo, com o sobrinho de Napoleão, disse que usaria a ilha como cenário de um romance.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>: </b></li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Conde de Monte Cristo (título original em francês: Le Comte de Monte-Cristo) é um romance da literatura francesa escrito por Alexandre Dumas (pai) em colaboração com Auguste Maquet e concluído em 1844. Inicialmente publicado como Folhetim de 1844 a 1846 (primeira parte: do 28 de Agosto ao 19 de Outubro de 1844, Segunda parte: do 31 de Outubro ao 26 de Novembro de 1844, Terceira parte: do 20 de Junho 1845 ao 15 de Janeiro de 1846), o livro conta a história de um marinheiro que foi preso injustamente. Lá, conhece o abade faria de quem fica amigo. Quando o abade faria morre, ele escapa da prisão e toma posse de uma misteriosa fortuna. O marinheiro, agora em condições financeiras, pode vingar-se daqueles que o levaram à vida de prisioneiro. A história é livremente inspirada por fatos da vida de Pierre Picaud.

					É considerado, juntamente com Os Três Mosqueteiros, uma das mais populares obras de Dumas, e é frequentemente incluída nas listas de livros mais vendidos de todos os tempos. O nome do romance surgiu quando Dumas a caminho da Ilha Monte-Cristo, com o sobrinho de Napoleão, disse que usaria a ilha como cenário de um romance.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>: </b></li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Conde de Monte Cristo (título original em francês: Le Comte de Monte-Cristo) é um romance da literatura francesa escrito por Alexandre Dumas (pai) em colaboração com Auguste Maquet e concluído em 1844. Inicialmente publicado como Folhetim de 1844 a 1846 (primeira parte: do 28 de Agosto ao 19 de Outubro de 1844, Segunda parte: do 31 de Outubro ao 26 de Novembro de 1844, Terceira parte: do 20 de Junho 1845 ao 15 de Janeiro de 1846), o livro conta a história de um marinheiro que foi preso injustamente. Lá, conhece o abade faria de quem fica amigo. Quando o abade faria morre, ele escapa da prisão e toma posse de uma misteriosa fortuna. O marinheiro, agora em condições financeiras, pode vingar-se daqueles que o levaram à vida de prisioneiro. A história é livremente inspirada por fatos da vida de Pierre Picaud.

					É considerado, juntamente com Os Três Mosqueteiros, uma das mais populares obras de Dumas, e é frequentemente incluída nas listas de livros mais vendidos de todos os tempos. O nome do romance surgiu quando Dumas a caminho da Ilha Monte-Cristo, com o sobrinho de Napoleão, disse que usaria a ilha como cenário de um romance.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>: </b></li>
					</ul>
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '000016'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'DUMASalexandre'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>