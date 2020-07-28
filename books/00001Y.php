<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001Y'");
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
			<?php $book = '00001Y'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Harry Potter e o Prisioneiro de Azkaban (no original em inglês Harry Potter and the Prisoner of Azkaban) é o terceiro livro dos sete volumes da série de fantasia Harry Potter, tanto em termos cronológicos como em ordem de publicação, da autora inglesa J. K. Rowling. Foi primeiramente publicado no Reino Unido pela editora londrina Bloomsbury em 1999.

					O livro conta sobre o terceiro ano de Harry Potter na Escola de Magia e Bruxaria de Hogwarts. Sem a aparição de Voldemort, a trama apresenta um novo perigo para o personagem principal: Sirius Black, que teria assassinado treze pessoas com um único feitiço, fugiu da prisão de Azkaban e estaria agora o perseguindo para matá-lo. O garoto, junto com seus dois amigos, Rony e Hermione, começam a investigar o suposto assassino e acabam descobrindo muitos segredos que envolvem sua já falecida família.

					O livro foi primeiramente publicado no Reino Unido no dia 8 de julho de 1999 pela editora Bloomsbury e nos Estados Unidos no dia 8 de setembro de 1999 pela editora Scholastic. No Brasil, a editora Rocco lançou o livro no primeiro dia de dezembro do ano de 2000 e em Portugal no dia 31 de março de 2000 pela editora Presença. Segundo Rowling, esse foi um dos livros mais fáceis de escrever, levando apenas um ano para ser finalizado. O romance vendeu mais de 68 mil cópias em seus primeiros três dias de lançamento no Reino Unido, e desde então contém mais de três milhões de cópias vendidas no país. O livro venceu o Whitbread de melhor livro infantil de 1999, o Bram Stoker Awards, o Locus de Melhor Romance de Fantasia, e foi indicado para muitos outros prêmios, incluindo o Hugo. Alguns consideraram o livro como \"mais obscuro\" do que os anteriores e notaram uma mudança na escrita de Rowling, dizendo que os personagens foram mais bem desenvolvidos e interessantes. Assim como os outros romances da série, Harry Potter e o Prisioneiro de Azkaban desencadeou alguns debates religiosos.

					A adaptação cinematográfica do livro dirigida por Alfonso Cuarón foi lançada em 2004, arrecadando mais de 796 milhões de dólares e assegurando sua entrada na lista de filmes de maior bilheteria. Jogos eletrônicos baseados em Harry Potter e o Prisioneiro de Azkaban também foram lançados para diversas plataformas, sendo que a maioria obteve críticas favoráveis.
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
					Harry Potter e o Prisioneiro de Azkaban (no original em inglês Harry Potter and the Prisoner of Azkaban) é o terceiro livro dos sete volumes da série de fantasia Harry Potter, tanto em termos cronológicos como em ordem de publicação, da autora inglesa J. K. Rowling. Foi primeiramente publicado no Reino Unido pela editora londrina Bloomsbury em 1999.

					O livro conta sobre o terceiro ano de Harry Potter na Escola de Magia e Bruxaria de Hogwarts. Sem a aparição de Voldemort, a trama apresenta um novo perigo para o personagem principal: Sirius Black, que teria assassinado treze pessoas com um único feitiço, fugiu da prisão de Azkaban e estaria agora o perseguindo para matá-lo. O garoto, junto com seus dois amigos, Rony e Hermione, começam a investigar o suposto assassino e acabam descobrindo muitos segredos que envolvem sua já falecida família.

					O livro foi primeiramente publicado no Reino Unido no dia 8 de julho de 1999 pela editora Bloomsbury e nos Estados Unidos no dia 8 de setembro de 1999 pela editora Scholastic. No Brasil, a editora Rocco lançou o livro no primeiro dia de dezembro do ano de 2000 e em Portugal no dia 31 de março de 2000 pela editora Presença. Segundo Rowling, esse foi um dos livros mais fáceis de escrever, levando apenas um ano para ser finalizado. O romance vendeu mais de 68 mil cópias em seus primeiros três dias de lançamento no Reino Unido, e desde então contém mais de três milhões de cópias vendidas no país. O livro venceu o Whitbread de melhor livro infantil de 1999, o Bram Stoker Awards, o Locus de Melhor Romance de Fantasia, e foi indicado para muitos outros prêmios, incluindo o Hugo. Alguns consideraram o livro como \"mais obscuro\" do que os anteriores e notaram uma mudança na escrita de Rowling, dizendo que os personagens foram mais bem desenvolvidos e interessantes. Assim como os outros romances da série, Harry Potter e o Prisioneiro de Azkaban desencadeou alguns debates religiosos.

					A adaptação cinematográfica do livro dirigida por Alfonso Cuarón foi lançada em 2004, arrecadando mais de 796 milhões de dólares e assegurando sua entrada na lista de filmes de maior bilheteria. Jogos eletrônicos baseados em Harry Potter e o Prisioneiro de Azkaban também foram lançados para diversas plataformas, sendo que a maioria obteve críticas favoráveis.
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
					Harry Potter e o Prisioneiro de Azkaban (no original em inglês Harry Potter and the Prisoner of Azkaban) é o terceiro livro dos sete volumes da série de fantasia Harry Potter, tanto em termos cronológicos como em ordem de publicação, da autora inglesa J. K. Rowling. Foi primeiramente publicado no Reino Unido pela editora londrina Bloomsbury em 1999.

					O livro conta sobre o terceiro ano de Harry Potter na Escola de Magia e Bruxaria de Hogwarts. Sem a aparição de Voldemort, a trama apresenta um novo perigo para o personagem principal: Sirius Black, que teria assassinado treze pessoas com um único feitiço, fugiu da prisão de Azkaban e estaria agora o perseguindo para matá-lo. O garoto, junto com seus dois amigos, Rony e Hermione, começam a investigar o suposto assassino e acabam descobrindo muitos segredos que envolvem sua já falecida família.

					O livro foi primeiramente publicado no Reino Unido no dia 8 de julho de 1999 pela editora Bloomsbury e nos Estados Unidos no dia 8 de setembro de 1999 pela editora Scholastic. No Brasil, a editora Rocco lançou o livro no primeiro dia de dezembro do ano de 2000 e em Portugal no dia 31 de março de 2000 pela editora Presença. Segundo Rowling, esse foi um dos livros mais fáceis de escrever, levando apenas um ano para ser finalizado. O romance vendeu mais de 68 mil cópias em seus primeiros três dias de lançamento no Reino Unido, e desde então contém mais de três milhões de cópias vendidas no país. O livro venceu o Whitbread de melhor livro infantil de 1999, o Bram Stoker Awards, o Locus de Melhor Romance de Fantasia, e foi indicado para muitos outros prêmios, incluindo o Hugo. Alguns consideraram o livro como \"mais obscuro\" do que os anteriores e notaram uma mudança na escrita de Rowling, dizendo que os personagens foram mais bem desenvolvidos e interessantes. Assim como os outros romances da série, Harry Potter e o Prisioneiro de Azkaban desencadeou alguns debates religiosos.

					A adaptação cinematográfica do livro dirigida por Alfonso Cuarón foi lançada em 2004, arrecadando mais de 796 milhões de dólares e assegurando sua entrada na lista de filmes de maior bilheteria. Jogos eletrônicos baseados em Harry Potter e o Prisioneiro de Azkaban também foram lançados para diversas plataformas, sendo que a maioria obteve críticas favoráveis.
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
			<?php $book = '00001Y'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'JKROWLING'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>