<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000023'");
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
			<?php $book = '000023'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Diário de Anne Frank é um livro escrito por Anne Frank entre 12 de junho de 1942 e 1.º de agosto de 1944 durante a Segunda Guerra Mundial. É conhecido por narrar momentos vivenciados pelo grupo de judeus confinados em um esconderijo durante a ocupação nazista dos Países Baixos. Publicado originalmente com o título de Het Achterhuis. Dagboekbrieven 14 Juni 1942 – 1 Augustus 1944 (O Anexo: Notas do Diário 14 de junho de 1942 - 1º de agosto de 1944) pela editora "Contact Publishing" em Amsterdã em 1947, o diário recebeu ampla atenção popular e da crítica após sua publicação inglês intitulada "Anne Frank: The Diary of a Young Girl" pela Doubleday & Company (Estados Unidos) e Vallentine Mitchell (Reino Unido) em 1952.

					Desde então, foi publicado em mais de 40 países e traduzido em mais de 70 idiomas, e vendeu mais de 35 milhões de cópias em todo o mundo,[1] sendo 16 milhões só no Brasil.[2]

					Sua popularidade inspirou a peça de teatro "The Diary of Anne Frank", de 1955, dos roteiristas Frances Goodrich e Albert Hackett, que também a adaptaram para uma versão cinematográfica de 1959.

					Suas anotações foram declaradas pela Organização das Nações Unidas para a Educação, a Ciência e a Cultura (Unesco) como patrimônio da humanidade. Além disso, o livro figura na 19a posição da lista Os 100 livros do século segundo o Le Monde
					<hr>
				</div>
			</div>
			<?php $book = '000023'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'FRANKanne'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>