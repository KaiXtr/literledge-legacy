<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001Z'");
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
			<?php $book = '00001Z'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Harry Potter e o Cálice de Fogo (no original em inglês Harry Potter and the Goblet of Fire) é o quarto livro dos sete volumes da série de fantasia Harry Potter, tanto em termos cronológicos como em ordem de publicação, da autora inglesa J. K. Rowling. Foi primeiramente publicado no Reino Unido e nos Estados Unidos em 2000. O livro segue o quarto ano de Harry Potter na Escola de Magia e Bruxaria de Hogwarts. Neste ano, a Copa Anual de Quadribol entre as casas é substituída pelo Torneio Tribuxo, uma competição amistosa entre as três maiores escolas europeias de bruxaria — Hogwarts, Beauxbatons e Durmstrang — que não se realizava havia um século. Somente alunos maiores de dezessete anos podem se inscrever no Torneio, porém, misteriosamente, Harry é escolhido pelo Cálice de Fogo e forçado a competir.

					O livro foi primeiramente publicado no Reino Unido e nos Estados Unidos no dia 8 de julho de 2000 pela editora Bloomsbury e Scholastic, respectivamente. No Brasil, a editora Rocco lançou o livro em junho de 2001, e em Portugal um mês depois da estreia oficial pela editora Presença. Segundo Rowling, esse era o livro mais difícil que já havia escrito até o momento. O romance se tornou, na época, o livro mais vendido da história, com uma estimativa em 3 milhões de cópias vendidas em suas primeiras 48 horas, e desde então contém mais de 55 milhões de cópias vendidas. O livro venceu o Prêmio Hugo de Melhor Romance, Indian Paintbrush Book Award, entre muitos outros. Assim como os outros romances da série, Harry Potter e o Cálice de Fogo desencadeou alguns debates religiosos.

					A adaptação cinematográfica do livro dirigida por Mike Newell foi lançada em 2005, arrecadando mais de 896 milhões de dólares e assegurando sua entrada na lista de filmes de maior bilheteria. Jogos eletrônicos baseados em Harry Potter e o Cálice de Fogo também foram lançados para diversas plataformas, sendo que a maioria obteve críticas favoráveis.
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
					Harry Potter e o Cálice de Fogo (no original em inglês Harry Potter and the Goblet of Fire) é o quarto livro dos sete volumes da série de fantasia Harry Potter, tanto em termos cronológicos como em ordem de publicação, da autora inglesa J. K. Rowling. Foi primeiramente publicado no Reino Unido e nos Estados Unidos em 2000. O livro segue o quarto ano de Harry Potter na Escola de Magia e Bruxaria de Hogwarts. Neste ano, a Copa Anual de Quadribol entre as casas é substituída pelo Torneio Tribuxo, uma competição amistosa entre as três maiores escolas europeias de bruxaria — Hogwarts, Beauxbatons e Durmstrang — que não se realizava havia um século. Somente alunos maiores de dezessete anos podem se inscrever no Torneio, porém, misteriosamente, Harry é escolhido pelo Cálice de Fogo e forçado a competir.

					O livro foi primeiramente publicado no Reino Unido e nos Estados Unidos no dia 8 de julho de 2000 pela editora Bloomsbury e Scholastic, respectivamente. No Brasil, a editora Rocco lançou o livro em junho de 2001, e em Portugal um mês depois da estreia oficial pela editora Presença. Segundo Rowling, esse era o livro mais difícil que já havia escrito até o momento. O romance se tornou, na época, o livro mais vendido da história, com uma estimativa em 3 milhões de cópias vendidas em suas primeiras 48 horas, e desde então contém mais de 55 milhões de cópias vendidas. O livro venceu o Prêmio Hugo de Melhor Romance, Indian Paintbrush Book Award, entre muitos outros. Assim como os outros romances da série, Harry Potter e o Cálice de Fogo desencadeou alguns debates religiosos.

					A adaptação cinematográfica do livro dirigida por Mike Newell foi lançada em 2005, arrecadando mais de 896 milhões de dólares e assegurando sua entrada na lista de filmes de maior bilheteria. Jogos eletrônicos baseados em Harry Potter e o Cálice de Fogo também foram lançados para diversas plataformas, sendo que a maioria obteve críticas favoráveis.
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
					Harry Potter e o Cálice de Fogo (no original em inglês Harry Potter and the Goblet of Fire) é o quarto livro dos sete volumes da série de fantasia Harry Potter, tanto em termos cronológicos como em ordem de publicação, da autora inglesa J. K. Rowling. Foi primeiramente publicado no Reino Unido e nos Estados Unidos em 2000. O livro segue o quarto ano de Harry Potter na Escola de Magia e Bruxaria de Hogwarts. Neste ano, a Copa Anual de Quadribol entre as casas é substituída pelo Torneio Tribuxo, uma competição amistosa entre as três maiores escolas europeias de bruxaria — Hogwarts, Beauxbatons e Durmstrang — que não se realizava havia um século. Somente alunos maiores de dezessete anos podem se inscrever no Torneio, porém, misteriosamente, Harry é escolhido pelo Cálice de Fogo e forçado a competir.

					O livro foi primeiramente publicado no Reino Unido e nos Estados Unidos no dia 8 de julho de 2000 pela editora Bloomsbury e Scholastic, respectivamente. No Brasil, a editora Rocco lançou o livro em junho de 2001, e em Portugal um mês depois da estreia oficial pela editora Presença. Segundo Rowling, esse era o livro mais difícil que já havia escrito até o momento. O romance se tornou, na época, o livro mais vendido da história, com uma estimativa em 3 milhões de cópias vendidas em suas primeiras 48 horas, e desde então contém mais de 55 milhões de cópias vendidas. O livro venceu o Prêmio Hugo de Melhor Romance, Indian Paintbrush Book Award, entre muitos outros. Assim como os outros romances da série, Harry Potter e o Cálice de Fogo desencadeou alguns debates religiosos.

					A adaptação cinematográfica do livro dirigida por Mike Newell foi lançada em 2005, arrecadando mais de 896 milhões de dólares e assegurando sua entrada na lista de filmes de maior bilheteria. Jogos eletrônicos baseados em Harry Potter e o Cálice de Fogo também foram lançados para diversas plataformas, sendo que a maioria obteve críticas favoráveis.
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
			<?php $book = '00001Z'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'JKROWLING'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>