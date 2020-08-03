<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000V'");
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
			<?php $book = '00000V'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Through the Looking-Glass and What Alice Found There (publicado em Portugal como Alice do Outro Lado do Espelho e no Brasil como Alice Através do Espelho e O Que Ela Encontrou Por Lá e ainda Alice No País Dos Espelhos) é um livro de 1871, a continuação do célebre Alice's Adventures in Wonderland (Alice no País das Maravilhas), de 1865. O autor é Charles Lutwidge Dogson, conhecido como Lewis Carroll (1832-1898).

					Carroll, apaixonado por crianças, elaborou as duas narrativas como um contraponto fantasioso e feérico que ridicularizava a compostura exigida às histórias edificantes e moralistas que eram lidas para os pequenos súditos da Inglaterra vitoriana. Um claro exemplo é o momento em que a sentenciosa Rainha Vermelha diz\"Fale só quando falarem com você\"Alice observa que, se essa regra fosse seguida por todos igualmente, a conversa deixaria de existir. Porém, tanto Alice no País das Maravilhas quanto Alice Através do Espelho mostraram ser muito mais do que histórias infantis: são obras-primas da literatura fantástica de todos os tempos, para leitores de todas as idades.

					No Brasil, uma das traduções mais conhecidas - com uma linguagem dirigida ao público infantil, foi feita por Monteiro Lobato; outra, mais erudita e fiel ao original, é de Augusto de Campos.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Through the Looking-Glass and What Alice Found There (publicado em Portugal como Alice do Outro Lado do Espelho e no Brasil como Alice Através do Espelho e O Que Ela Encontrou Por Lá e ainda Alice No País Dos Espelhos) é um livro de 1871, a continuação do célebre Alice's Adventures in Wonderland (Alice no País das Maravilhas), de 1865. O autor é Charles Lutwidge Dogson, conhecido como Lewis Carroll (1832-1898).

					Carroll, apaixonado por crianças, elaborou as duas narrativas como um contraponto fantasioso e feérico que ridicularizava a compostura exigida às histórias edificantes e moralistas que eram lidas para os pequenos súditos da Inglaterra vitoriana. Um claro exemplo é o momento em que a sentenciosa Rainha Vermelha diz\"Fale só quando falarem com você\"Alice observa que, se essa regra fosse seguida por todos igualmente, a conversa deixaria de existir. Porém, tanto Alice no País das Maravilhas quanto Alice Através do Espelho mostraram ser muito mais do que histórias infantis: são obras-primas da literatura fantástica de todos os tempos, para leitores de todas as idades.

					No Brasil, uma das traduções mais conhecidas - com uma linguagem dirigida ao público infantil, foi feita por Monteiro Lobato; outra, mais erudita e fiel ao original, é de Augusto de Campos.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Through the Looking-Glass and What Alice Found There (publicado em Portugal como Alice do Outro Lado do Espelho e no Brasil como Alice Através do Espelho e O Que Ela Encontrou Por Lá e ainda Alice No País Dos Espelhos) é um livro de 1871, a continuação do célebre Alice's Adventures in Wonderland (Alice no País das Maravilhas), de 1865. O autor é Charles Lutwidge Dogson, conhecido como Lewis Carroll (1832-1898).

					Carroll, apaixonado por crianças, elaborou as duas narrativas como um contraponto fantasioso e feérico que ridicularizava a compostura exigida às histórias edificantes e moralistas que eram lidas para os pequenos súditos da Inglaterra vitoriana. Um claro exemplo é o momento em que a sentenciosa Rainha Vermelha diz\"Fale só quando falarem com você\"Alice observa que, se essa regra fosse seguida por todos igualmente, a conversa deixaria de existir. Porém, tanto Alice no País das Maravilhas quanto Alice Através do Espelho mostraram ser muito mais do que histórias infantis: são obras-primas da literatura fantástica de todos os tempos, para leitores de todas as idades.

					No Brasil, uma das traduções mais conhecidas - com uma linguagem dirigida ao público infantil, foi feita por Monteiro Lobato; outra, mais erudita e fiel ao original, é de Augusto de Campos.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					</ul>
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00000V'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'CARROLLlewis'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>