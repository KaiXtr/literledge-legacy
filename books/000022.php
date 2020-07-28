<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000022'");
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
			<?php $book = '000022'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Harry Potter and the Deathly Hallows (Brasil: Harry Potter e as Relíquias da Morte /Portugal: Harry Potter e os Talismãs da Morte) é um romance de fantasia escrito pela britânica J. K. Rowling. É o sétimo e último livro da série Harry Potter. Após se encarregarem da tarefa do falecido diretor da Escola de Magia e Bruxaria de Hogwarts, Alvo Dumbledore em encontrar e destruir todas as Horcruxes criadas pelo maior bruxo das trevas Voldemort, o livro narra a jornada do personagem principal, o jovem Harry, e seus melhores amigos Rony e Hermione, que abandonaram seu último ano letivo na escola de feitiçaria para cumprirem tal dever. Ao passo que o confronto final entre Harry e Voldemort se aproxima, a batalha entre os Comensais da Morte (seguidores de Voldemort) e o resto do mundo bruxo acontece. Foi lançado em 21 de julho de 2007 no Reino Unido e em outros países anglófonos e somente em 8 de novembro do mesmo ano no Brasil e 16 de novembro Portugal.

					O primeiro contato que a escritora teve com o processo de escrita do livro foi no ano de 1990, quando escreveu um rascunho do último capítulo do livro, o qual foi reescrito diversas vezes. Por conta de sua filha, Rowling encontrou dificuldades em escrever e dedicou a maior parte do ano de 2005 na a criação da bebê, retomando determinadamente a compor por longos períodos no final do mesmo ano. Relíquias da Morte foi o romance da série que mais proporcionou diversão e sentimentos como tristeza e euforia à autora. Diversos rumores sobre o título do livro surgiram, porém foram descartados por Rowling, que mais tarde se declarou dividida entre três novos títulos. Ao terminar o livro num hotel em Edimburgo, a mesma registrou dizeres num busto de Hermes em seu quarto contendo informações como o dia e o local da finalização da obra.

					Um dos livros mais aguardados de 2007, Relíquias da Morte foi aclamado por críticos literários e escritores, com elogios direcionados a prosa, imaginação, humor e a evolução literária pessoal da escritora e da própria história da série, embora alguns comentários digam que certos capítulos são muito longos, deixando personagens e situações cansativas. Rowling foi comparada a autores como Charles Dickens, Ian Fleming, Mark Twain e Lewis Carroll. Consequentemente, foi incluído em algumas listas reunindo os melhores de 2007, sendo listado entre os cem melhores pela The New York Times e entre os melhores livros infantis e melhores para jovens adultos pela American Library Association. O livro quebrou recordes de vendas e pré-vendas mundiais, registrando 8,3 milhões de cópias vendidas nos Estados Unidos e 2,65 milhões no Reino Unidos nas primeiras vinte e quatro horas, tornando-se o livro mais vendido em um dia. Após o lançamento do último livro, as ações da editora Bloomsbury despencaram, visto que o futuro econômico da mesma era incerto após o término da série.

					A adaptação cinematográfica do livro foi dividida em duas partes. A primeira, lançada em 2010 e dirigida por David Yates, arrecadou pouco mais de 960 milhões de dólares, enquanto a segunda parte, lançada em 2011, conta com a mesma direção e arrecadou mais de 1,3 bilhão de dólares. Ambos os longas se encontram na lista de filmes de maior bilheteria, assim como todos os outros longas da série, embora a parte dois seja o mais bem sucedido entre eles, assegurando a posição de décimo filme de maior bilheteria mundial. Jogos eletrônicos baseados em Harry Potter e as Relíquias da Morte também foram lançados para diversas plataformas, os quais obtiveram avaliações relativamente baixas. Stephen Fry e Jim Dale narraram as versões de audiolivro britânica e americana, respectivamente.
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
					Harry Potter and the Deathly Hallows (Brasil: Harry Potter e as Relíquias da Morte /Portugal: Harry Potter e os Talismãs da Morte) é um romance de fantasia escrito pela britânica J. K. Rowling. É o sétimo e último livro da série Harry Potter. Após se encarregarem da tarefa do falecido diretor da Escola de Magia e Bruxaria de Hogwarts, Alvo Dumbledore em encontrar e destruir todas as Horcruxes criadas pelo maior bruxo das trevas Voldemort, o livro narra a jornada do personagem principal, o jovem Harry, e seus melhores amigos Rony e Hermione, que abandonaram seu último ano letivo na escola de feitiçaria para cumprirem tal dever. Ao passo que o confronto final entre Harry e Voldemort se aproxima, a batalha entre os Comensais da Morte (seguidores de Voldemort) e o resto do mundo bruxo acontece. Foi lançado em 21 de julho de 2007 no Reino Unido e em outros países anglófonos e somente em 8 de novembro do mesmo ano no Brasil e 16 de novembro Portugal.

					O primeiro contato que a escritora teve com o processo de escrita do livro foi no ano de 1990, quando escreveu um rascunho do último capítulo do livro, o qual foi reescrito diversas vezes. Por conta de sua filha, Rowling encontrou dificuldades em escrever e dedicou a maior parte do ano de 2005 na a criação da bebê, retomando determinadamente a compor por longos períodos no final do mesmo ano. Relíquias da Morte foi o romance da série que mais proporcionou diversão e sentimentos como tristeza e euforia à autora. Diversos rumores sobre o título do livro surgiram, porém foram descartados por Rowling, que mais tarde se declarou dividida entre três novos títulos. Ao terminar o livro num hotel em Edimburgo, a mesma registrou dizeres num busto de Hermes em seu quarto contendo informações como o dia e o local da finalização da obra.

					Um dos livros mais aguardados de 2007, Relíquias da Morte foi aclamado por críticos literários e escritores, com elogios direcionados a prosa, imaginação, humor e a evolução literária pessoal da escritora e da própria história da série, embora alguns comentários digam que certos capítulos são muito longos, deixando personagens e situações cansativas. Rowling foi comparada a autores como Charles Dickens, Ian Fleming, Mark Twain e Lewis Carroll. Consequentemente, foi incluído em algumas listas reunindo os melhores de 2007, sendo listado entre os cem melhores pela The New York Times e entre os melhores livros infantis e melhores para jovens adultos pela American Library Association. O livro quebrou recordes de vendas e pré-vendas mundiais, registrando 8,3 milhões de cópias vendidas nos Estados Unidos e 2,65 milhões no Reino Unidos nas primeiras vinte e quatro horas, tornando-se o livro mais vendido em um dia. Após o lançamento do último livro, as ações da editora Bloomsbury despencaram, visto que o futuro econômico da mesma era incerto após o término da série.

					A adaptação cinematográfica do livro foi dividida em duas partes. A primeira, lançada em 2010 e dirigida por David Yates, arrecadou pouco mais de 960 milhões de dólares, enquanto a segunda parte, lançada em 2011, conta com a mesma direção e arrecadou mais de 1,3 bilhão de dólares. Ambos os longas se encontram na lista de filmes de maior bilheteria, assim como todos os outros longas da série, embora a parte dois seja o mais bem sucedido entre eles, assegurando a posição de décimo filme de maior bilheteria mundial. Jogos eletrônicos baseados em Harry Potter e as Relíquias da Morte também foram lançados para diversas plataformas, os quais obtiveram avaliações relativamente baixas. Stephen Fry e Jim Dale narraram as versões de audiolivro britânica e americana, respectivamente.
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
					Harry Potter and the Deathly Hallows (Brasil: Harry Potter e as Relíquias da Morte /Portugal: Harry Potter e os Talismãs da Morte) é um romance de fantasia escrito pela britânica J. K. Rowling. É o sétimo e último livro da série Harry Potter. Após se encarregarem da tarefa do falecido diretor da Escola de Magia e Bruxaria de Hogwarts, Alvo Dumbledore em encontrar e destruir todas as Horcruxes criadas pelo maior bruxo das trevas Voldemort, o livro narra a jornada do personagem principal, o jovem Harry, e seus melhores amigos Rony e Hermione, que abandonaram seu último ano letivo na escola de feitiçaria para cumprirem tal dever. Ao passo que o confronto final entre Harry e Voldemort se aproxima, a batalha entre os Comensais da Morte (seguidores de Voldemort) e o resto do mundo bruxo acontece. Foi lançado em 21 de julho de 2007 no Reino Unido e em outros países anglófonos e somente em 8 de novembro do mesmo ano no Brasil e 16 de novembro Portugal.

					O primeiro contato que a escritora teve com o processo de escrita do livro foi no ano de 1990, quando escreveu um rascunho do último capítulo do livro, o qual foi reescrito diversas vezes. Por conta de sua filha, Rowling encontrou dificuldades em escrever e dedicou a maior parte do ano de 2005 na a criação da bebê, retomando determinadamente a compor por longos períodos no final do mesmo ano. Relíquias da Morte foi o romance da série que mais proporcionou diversão e sentimentos como tristeza e euforia à autora. Diversos rumores sobre o título do livro surgiram, porém foram descartados por Rowling, que mais tarde se declarou dividida entre três novos títulos. Ao terminar o livro num hotel em Edimburgo, a mesma registrou dizeres num busto de Hermes em seu quarto contendo informações como o dia e o local da finalização da obra.

					Um dos livros mais aguardados de 2007, Relíquias da Morte foi aclamado por críticos literários e escritores, com elogios direcionados a prosa, imaginação, humor e a evolução literária pessoal da escritora e da própria história da série, embora alguns comentários digam que certos capítulos são muito longos, deixando personagens e situações cansativas. Rowling foi comparada a autores como Charles Dickens, Ian Fleming, Mark Twain e Lewis Carroll. Consequentemente, foi incluído em algumas listas reunindo os melhores de 2007, sendo listado entre os cem melhores pela The New York Times e entre os melhores livros infantis e melhores para jovens adultos pela American Library Association. O livro quebrou recordes de vendas e pré-vendas mundiais, registrando 8,3 milhões de cópias vendidas nos Estados Unidos e 2,65 milhões no Reino Unidos nas primeiras vinte e quatro horas, tornando-se o livro mais vendido em um dia. Após o lançamento do último livro, as ações da editora Bloomsbury despencaram, visto que o futuro econômico da mesma era incerto após o término da série.

					A adaptação cinematográfica do livro foi dividida em duas partes. A primeira, lançada em 2010 e dirigida por David Yates, arrecadou pouco mais de 960 milhões de dólares, enquanto a segunda parte, lançada em 2011, conta com a mesma direção e arrecadou mais de 1,3 bilhão de dólares. Ambos os longas se encontram na lista de filmes de maior bilheteria, assim como todos os outros longas da série, embora a parte dois seja o mais bem sucedido entre eles, assegurando a posição de décimo filme de maior bilheteria mundial. Jogos eletrônicos baseados em Harry Potter e as Relíquias da Morte também foram lançados para diversas plataformas, os quais obtiveram avaliações relativamente baixas. Stephen Fry e Jim Dale narraram as versões de audiolivro britânica e americana, respectivamente.
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
			<?php $book = '000022'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'JKROWLING'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>