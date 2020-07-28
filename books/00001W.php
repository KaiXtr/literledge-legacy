<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001W'");
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
			<?php $book = '00001W'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Harry Potter e a Pedra Filosofal (no original, em inglês: Harry Potter and the Philosopher's Stone) é o primeiro dos sete livros da série de fantasia Harry Potter, escrita por J. K. Rowling. O livro conta a história de Harry Potter, um órfão criado pelos tios que descobre, em seu décimo primeiro aniversário, que é um bruxo. No romance, são narrados seus primeiros passos na comunidade bruxa, sua entrada na Escola de Magia e Bruxaria de Hogwarts e o início de sua amizade com Rony Weasley e Hermione Granger, os quais o ajudam a enfrentar Lord Voldemort — Lorde das Trevas e assassino dos pais de Harry, que agora procura um objeto lendário conhecido como a pedra filosofal.

					Após ter sido rejeitado por diversas editoras, o livro foi publicado no Reino Unido pela editora londrina Bloomsbury em 26 de junho 1997. No Brasil, a editora Rocco comprou-lhe os direitos em 1999, tendo sido publicado em 1.º de janeiro do ano seguinte; em Portugal, entrou em circulação no dia 14 de outubro de 1999 por intermédio da editora Presença. A obra ganhou a maioria das premiações britânicas julgadas por crianças e outros prêmios nos Estados Unidos e alcançou o topo da lista de ficções mais vendidas do The New York Times em agosto de 1999, na qual permaneceu perto da posição durante grande parte de 1999 e 2000. O livro foi traduzido para mais de sessenta línguas diferentes.

					Comentários sobre a imaginação, o humor e o estilo literário de Rowling marcaram as críticas favoráveis, embora alguns tenham se queixado que os capítulos finais estejam apressados. A escrita da autora foi comparada com a de Jane Austen, uma de suas escritoras favoritas, Roald Dahl, cujas obras prevaleciam sobre o mundo de histórias infantis até a chegada de Harry Potter, e ao poeta Homero da Grécia Antiga. Enquanto alguns comentaristas diziam que o livro se espelhava a internatos das épocas Vitoriana e Eduardiana, outros achavam que a trama estava firmemente aplicada no mundo moderno por conter problemas ético sociais contemporâneos. Junto com os outros títulos da série, o livro foi criticado por grupos religiosos, levando a sua proibição em alguns países devido a acusações de promoção à bruxaria. No entanto, determinados críticos cristãos defendem-no, alegando que ele exemplifica importantes conceitos valorizados pela doutrina cristã, como o autossacrifício.

					A adaptação cinematográfica do livro dirigida por Chris Columbus foi lançada em 2001 e arrecadou mais de 974 milhões de dólares, assegurando sua entrada na lista de filmes de maior bilheteria. Jogos eletrônicos baseados em Harry Potter e a Pedra Filosofal também foram lançados para diversas plataformas, os quais obtiveram críticas favoráveis no geral.
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
					Harry Potter e a Pedra Filosofal (no original, em inglês: Harry Potter and the Philosopher's Stone) é o primeiro dos sete livros da série de fantasia Harry Potter, escrita por J. K. Rowling. O livro conta a história de Harry Potter, um órfão criado pelos tios que descobre, em seu décimo primeiro aniversário, que é um bruxo. No romance, são narrados seus primeiros passos na comunidade bruxa, sua entrada na Escola de Magia e Bruxaria de Hogwarts e o início de sua amizade com Rony Weasley e Hermione Granger, os quais o ajudam a enfrentar Lord Voldemort — Lorde das Trevas e assassino dos pais de Harry, que agora procura um objeto lendário conhecido como a pedra filosofal.

					Após ter sido rejeitado por diversas editoras, o livro foi publicado no Reino Unido pela editora londrina Bloomsbury em 26 de junho 1997. No Brasil, a editora Rocco comprou-lhe os direitos em 1999, tendo sido publicado em 1.º de janeiro do ano seguinte; em Portugal, entrou em circulação no dia 14 de outubro de 1999 por intermédio da editora Presença. A obra ganhou a maioria das premiações britânicas julgadas por crianças e outros prêmios nos Estados Unidos e alcançou o topo da lista de ficções mais vendidas do The New York Times em agosto de 1999, na qual permaneceu perto da posição durante grande parte de 1999 e 2000. O livro foi traduzido para mais de sessenta línguas diferentes.

					Comentários sobre a imaginação, o humor e o estilo literário de Rowling marcaram as críticas favoráveis, embora alguns tenham se queixado que os capítulos finais estejam apressados. A escrita da autora foi comparada com a de Jane Austen, uma de suas escritoras favoritas, Roald Dahl, cujas obras prevaleciam sobre o mundo de histórias infantis até a chegada de Harry Potter, e ao poeta Homero da Grécia Antiga. Enquanto alguns comentaristas diziam que o livro se espelhava a internatos das épocas Vitoriana e Eduardiana, outros achavam que a trama estava firmemente aplicada no mundo moderno por conter problemas ético sociais contemporâneos. Junto com os outros títulos da série, o livro foi criticado por grupos religiosos, levando a sua proibição em alguns países devido a acusações de promoção à bruxaria. No entanto, determinados críticos cristãos defendem-no, alegando que ele exemplifica importantes conceitos valorizados pela doutrina cristã, como o autossacrifício.

					A adaptação cinematográfica do livro dirigida por Chris Columbus foi lançada em 2001 e arrecadou mais de 974 milhões de dólares, assegurando sua entrada na lista de filmes de maior bilheteria. Jogos eletrônicos baseados em Harry Potter e a Pedra Filosofal também foram lançados para diversas plataformas, os quais obtiveram críticas favoráveis no geral.
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
					Harry Potter e a Pedra Filosofal (no original, em inglês: Harry Potter and the Philosopher's Stone) é o primeiro dos sete livros da série de fantasia Harry Potter, escrita por J. K. Rowling. O livro conta a história de Harry Potter, um órfão criado pelos tios que descobre, em seu décimo primeiro aniversário, que é um bruxo. No romance, são narrados seus primeiros passos na comunidade bruxa, sua entrada na Escola de Magia e Bruxaria de Hogwarts e o início de sua amizade com Rony Weasley e Hermione Granger, os quais o ajudam a enfrentar Lord Voldemort — Lorde das Trevas e assassino dos pais de Harry, que agora procura um objeto lendário conhecido como a pedra filosofal.

					Após ter sido rejeitado por diversas editoras, o livro foi publicado no Reino Unido pela editora londrina Bloomsbury em 26 de junho 1997. No Brasil, a editora Rocco comprou-lhe os direitos em 1999, tendo sido publicado em 1.º de janeiro do ano seguinte; em Portugal, entrou em circulação no dia 14 de outubro de 1999 por intermédio da editora Presença. A obra ganhou a maioria das premiações britânicas julgadas por crianças e outros prêmios nos Estados Unidos e alcançou o topo da lista de ficções mais vendidas do The New York Times em agosto de 1999, na qual permaneceu perto da posição durante grande parte de 1999 e 2000. O livro foi traduzido para mais de sessenta línguas diferentes.

					Comentários sobre a imaginação, o humor e o estilo literário de Rowling marcaram as críticas favoráveis, embora alguns tenham se queixado que os capítulos finais estejam apressados. A escrita da autora foi comparada com a de Jane Austen, uma de suas escritoras favoritas, Roald Dahl, cujas obras prevaleciam sobre o mundo de histórias infantis até a chegada de Harry Potter, e ao poeta Homero da Grécia Antiga. Enquanto alguns comentaristas diziam que o livro se espelhava a internatos das épocas Vitoriana e Eduardiana, outros achavam que a trama estava firmemente aplicada no mundo moderno por conter problemas ético sociais contemporâneos. Junto com os outros títulos da série, o livro foi criticado por grupos religiosos, levando a sua proibição em alguns países devido a acusações de promoção à bruxaria. No entanto, determinados críticos cristãos defendem-no, alegando que ele exemplifica importantes conceitos valorizados pela doutrina cristã, como o autossacrifício.

					A adaptação cinematográfica do livro dirigida por Chris Columbus foi lançada em 2001 e arrecadou mais de 974 milhões de dólares, assegurando sua entrada na lista de filmes de maior bilheteria. Jogos eletrônicos baseados em Harry Potter e a Pedra Filosofal também foram lançados para diversas plataformas, os quais obtiveram críticas favoráveis no geral.
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
			<?php $book = '00001W'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'JKROWLING'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>