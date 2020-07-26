<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000021'");
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
			<?php $book = '000021'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Harry Potter and the Half-Blood Prince (Brasil: Harry Potter e o Enigma do Príncipe /Portugal: Harry Potter e o Príncipe Misterioso) é um romance de fantasia escrito pela britânica J. K. Rowling, sendo o sexto dos sete volumes da série Harry Potter. Retomando os passos de Harry no mundo bruxo, o jovem, agora em seu sexto ano na Escola de Magia e Bruxaria de Hogwarts, prepara-se para a batalha final contra Voldemort, cujo poder aumenta ininterruptamente. Em sessões privadas com o diretor Alvo Dumbledore, Harry vasculha o passado de Voldemort para obter respostas em como destruí-lo.

					O livro foi publicado no Reino Unido pela editora Bloomsbury e em outro países anglófonos a 16 de julho de 2005, contando com uma impressão inicial de 10,8 milhões de cópias.[1] Em contrapartida, a Editorial Presença publicou-o em Portugal, a 15 de outubro, e a editora Rocco no Brasil, em 26 de novembro do mesmo ano, em ambos os casos adotando títulos que não seguiram a tradução literal do original: Harry Potter e o Príncipe Misterioso, em Portugal, Harry Potter e o Enigma do Príncipe, no Brasil.

					Com críticas predominantemente positivas, a obra alcançou o sucesso comercial e quebrou recordes de vendas, vencendo diversos prêmios literários, o que resultou em uma grande aceitação por parte da indústria literária. Numerosas análises constituídas ao romance giraram em torno da evolução do estilo literário de Rowling, que se distanciou do tom infantil ao qual havia construído seus livros anteriores e enfatizou o cenário sombrio que rege a história. O considerável crescimento de Harry e de outros personagens adolescentes também atraiu muita atenção. No entanto, o fato de alguns aspectos finais parecerem previsíveis foi objeto de diversos cometários negativos.[2][3] Alguns consideram o amor, a morte, a confiança e a redenção como os temas principais. A obra vendeu nove milhões de cópias nas primeiras 24 horas após a publicação, um recorde quebrado somente por sua sequência, Harry Potter e as Relíquias da Morte.[4]

					A adaptação cinematográfica do livro dirigida por David Yates foi lançada em 2009 e arrecadou mais de 934 milhões de dólares ao redor do mundo, assegurando sua entrada na lista de filmes de maior bilheteria.[5][6] Jogos eletrônicos baseados em Harry Potter e o Enigma do Príncipe também foram lançados para diversas plataformas.
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
					Harry Potter and the Half-Blood Prince (Brasil: Harry Potter e o Enigma do Príncipe /Portugal: Harry Potter e o Príncipe Misterioso) é um romance de fantasia escrito pela britânica J. K. Rowling, sendo o sexto dos sete volumes da série Harry Potter. Retomando os passos de Harry no mundo bruxo, o jovem, agora em seu sexto ano na Escola de Magia e Bruxaria de Hogwarts, prepara-se para a batalha final contra Voldemort, cujo poder aumenta ininterruptamente. Em sessões privadas com o diretor Alvo Dumbledore, Harry vasculha o passado de Voldemort para obter respostas em como destruí-lo.

					O livro foi publicado no Reino Unido pela editora Bloomsbury e em outro países anglófonos a 16 de julho de 2005, contando com uma impressão inicial de 10,8 milhões de cópias.[1] Em contrapartida, a Editorial Presença publicou-o em Portugal, a 15 de outubro, e a editora Rocco no Brasil, em 26 de novembro do mesmo ano, em ambos os casos adotando títulos que não seguiram a tradução literal do original: Harry Potter e o Príncipe Misterioso, em Portugal, Harry Potter e o Enigma do Príncipe, no Brasil.

					Com críticas predominantemente positivas, a obra alcançou o sucesso comercial e quebrou recordes de vendas, vencendo diversos prêmios literários, o que resultou em uma grande aceitação por parte da indústria literária. Numerosas análises constituídas ao romance giraram em torno da evolução do estilo literário de Rowling, que se distanciou do tom infantil ao qual havia construído seus livros anteriores e enfatizou o cenário sombrio que rege a história. O considerável crescimento de Harry e de outros personagens adolescentes também atraiu muita atenção. No entanto, o fato de alguns aspectos finais parecerem previsíveis foi objeto de diversos cometários negativos.[2][3] Alguns consideram o amor, a morte, a confiança e a redenção como os temas principais. A obra vendeu nove milhões de cópias nas primeiras 24 horas após a publicação, um recorde quebrado somente por sua sequência, Harry Potter e as Relíquias da Morte.[4]

					A adaptação cinematográfica do livro dirigida por David Yates foi lançada em 2009 e arrecadou mais de 934 milhões de dólares ao redor do mundo, assegurando sua entrada na lista de filmes de maior bilheteria.[5][6] Jogos eletrônicos baseados em Harry Potter e o Enigma do Príncipe também foram lançados para diversas plataformas.
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
					Harry Potter and the Half-Blood Prince (Brasil: Harry Potter e o Enigma do Príncipe /Portugal: Harry Potter e o Príncipe Misterioso) é um romance de fantasia escrito pela britânica J. K. Rowling, sendo o sexto dos sete volumes da série Harry Potter. Retomando os passos de Harry no mundo bruxo, o jovem, agora em seu sexto ano na Escola de Magia e Bruxaria de Hogwarts, prepara-se para a batalha final contra Voldemort, cujo poder aumenta ininterruptamente. Em sessões privadas com o diretor Alvo Dumbledore, Harry vasculha o passado de Voldemort para obter respostas em como destruí-lo.

					O livro foi publicado no Reino Unido pela editora Bloomsbury e em outro países anglófonos a 16 de julho de 2005, contando com uma impressão inicial de 10,8 milhões de cópias.[1] Em contrapartida, a Editorial Presença publicou-o em Portugal, a 15 de outubro, e a editora Rocco no Brasil, em 26 de novembro do mesmo ano, em ambos os casos adotando títulos que não seguiram a tradução literal do original: Harry Potter e o Príncipe Misterioso, em Portugal, Harry Potter e o Enigma do Príncipe, no Brasil.

					Com críticas predominantemente positivas, a obra alcançou o sucesso comercial e quebrou recordes de vendas, vencendo diversos prêmios literários, o que resultou em uma grande aceitação por parte da indústria literária. Numerosas análises constituídas ao romance giraram em torno da evolução do estilo literário de Rowling, que se distanciou do tom infantil ao qual havia construído seus livros anteriores e enfatizou o cenário sombrio que rege a história. O considerável crescimento de Harry e de outros personagens adolescentes também atraiu muita atenção. No entanto, o fato de alguns aspectos finais parecerem previsíveis foi objeto de diversos cometários negativos.[2][3] Alguns consideram o amor, a morte, a confiança e a redenção como os temas principais. A obra vendeu nove milhões de cópias nas primeiras 24 horas após a publicação, um recorde quebrado somente por sua sequência, Harry Potter e as Relíquias da Morte.[4]

					A adaptação cinematográfica do livro dirigida por David Yates foi lançada em 2009 e arrecadou mais de 934 milhões de dólares ao redor do mundo, assegurando sua entrada na lista de filmes de maior bilheteria.[5][6] Jogos eletrônicos baseados em Harry Potter e o Enigma do Príncipe também foram lançados para diversas plataformas.
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
			<?php $book = '000021'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'JKROWLING'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>