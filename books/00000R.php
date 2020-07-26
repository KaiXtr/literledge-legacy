<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000R'");
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
			<?php $book = '00000R'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Capital (em alemão: Das Kapital) é um conjunto de livros (sendo o primeiro de 1867) de Karl Marx que constituem uma análise do capitalismo (crítica da economia política). Muitos consideram esta obra o marco do pensamento socialista marxista. Nela existem muitos conceitos econômicos complexos, como mais valia, capital constante e capital variável, uma análise sobre o salário; ou sobre a acumulação primitiva. Resumindo, sobre todos os aspectos do modo de produção capitalista, incluindo também uma crítica sobre a teoria do valor-trabalho de Adam Smith e de outros assuntos dos economistas clássicos.

					Quem procura sobre a teoria econômica marxista consulta o livro O Capital. Porém como o seu conteúdo é volumoso e abrangente, a subsecção quanto ao conteúdo foi separada por livros, e alguns itens contêm apenas sinopse para as hiperligações que levam aos verbetes como Força de trabalho, Teoria da Abstinência, acumulação primitiva, etc. Ainda, é conveniente consultar a obra anterior que também contém parte do conteúdo que seria aglutinado pelo autor: manuscritos de 1844, Miséria da Filosofia (contém uma tabela comparando a obra econômica de Proudhon com a de Marx), Contribuição para a Crítica da Economia Política, Grundrisse. Há também resumos de O Capital preparado por outros, como a de Carlo Cafiero. Mas o mais recomendado é a leitura integral da obra (assim também recomendaram Cafiero, Julian Borchardt, Roman Rosdolsky, Rosa Luxemburgo, etc). Na empreitada de ler a obra integral muitos acabam desistindo no caminho por ser uma obra densa e difícil.

					Marx levou muito tempo até chegar à sua obra considerada máxima. Em 1844 escreveu os Manuscritos económico-filosóficos de 1844. Cada vez mais preocupado com os problemas económicos, escreveu e publicou Miséria da Filosofia em 1847, uma resposta preocupada com a objectividade dessa ciência (a Economia Política) ao livro Sistema das Contradições Económicas ou Filosofia da Miséria de Proudhon (que questionava a economia mas pelas inquietudes filosóficas do famoso autor anarquista).

					Em 1859 publicou Contribuição para a Crítica da Economia Política, que continha dois capítulos: A mercadoria e A moeda – O capital seria uma continuação desse livro, mas Marx se desentendeu com seu editor.

					Seus textos escritos em cadernos para rascunhar e ordenar o pensamento econômico ficaram conhecidos como as Grundrisse. O pequeno Formações econômicas pré-capitalistas é uma das obras derivadas desse volumoso trabalho, que se desdobraria (principalmente, mas não somente) nos Livros 1 a 3 de O Capital onde Marx iria expor sua teoria e no Livro 4, que seria a reunião de teorias dos outros autores comentados.

					Entre as várias opções de caminhos para expor suas ideias, Marx pensou publicar antes dos outros Livros o que seria o Livro 4 (para expor as falhas dos outros autores e daí mostrar as suas), em unir o conteúdo do Livro 4 ao Livro 1 (mas ficaria então demasiado grande), mas por fim decidiu expor toda sua teoria primeiro para depois mostrar a de outros autores, como forma de satisfazer o público que queria novidades no campo da economia.

					A vontade de escrever um livr\"um todo artístico\" levou a refinar bastante o texto, acrescentando referências, e a excluir doo que seria o capítulo 6 do plano inicial do Livro 1.

					Infelizmente o autor não pôde continuar a cuidar da publicação dos seus livros, muito embora alguns manuscritos não-publicados em resposta aos economistas marginais da época possam ser classificados como parte desta série de livros.[1]
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Capital (em alemão: Das Kapital) é um conjunto de livros (sendo o primeiro de 1867) de Karl Marx que constituem uma análise do capitalismo (crítica da economia política). Muitos consideram esta obra o marco do pensamento socialista marxista. Nela existem muitos conceitos econômicos complexos, como mais valia, capital constante e capital variável, uma análise sobre o salário; ou sobre a acumulação primitiva. Resumindo, sobre todos os aspectos do modo de produção capitalista, incluindo também uma crítica sobre a teoria do valor-trabalho de Adam Smith e de outros assuntos dos economistas clássicos.

					Quem procura sobre a teoria econômica marxista consulta o livro O Capital. Porém como o seu conteúdo é volumoso e abrangente, a subsecção quanto ao conteúdo foi separada por livros, e alguns itens contêm apenas sinopse para as hiperligações que levam aos verbetes como Força de trabalho, Teoria da Abstinência, acumulação primitiva, etc. Ainda, é conveniente consultar a obra anterior que também contém parte do conteúdo que seria aglutinado pelo autor: manuscritos de 1844, Miséria da Filosofia (contém uma tabela comparando a obra econômica de Proudhon com a de Marx), Contribuição para a Crítica da Economia Política, Grundrisse. Há também resumos de O Capital preparado por outros, como a de Carlo Cafiero. Mas o mais recomendado é a leitura integral da obra (assim também recomendaram Cafiero, Julian Borchardt, Roman Rosdolsky, Rosa Luxemburgo, etc). Na empreitada de ler a obra integral muitos acabam desistindo no caminho por ser uma obra densa e difícil.

					Marx levou muito tempo até chegar à sua obra considerada máxima. Em 1844 escreveu os Manuscritos económico-filosóficos de 1844. Cada vez mais preocupado com os problemas económicos, escreveu e publicou Miséria da Filosofia em 1847, uma resposta preocupada com a objectividade dessa ciência (a Economia Política) ao livro Sistema das Contradições Económicas ou Filosofia da Miséria de Proudhon (que questionava a economia mas pelas inquietudes filosóficas do famoso autor anarquista).

					Em 1859 publicou Contribuição para a Crítica da Economia Política, que continha dois capítulos: A mercadoria e A moeda – O capital seria uma continuação desse livro, mas Marx se desentendeu com seu editor.

					Seus textos escritos em cadernos para rascunhar e ordenar o pensamento econômico ficaram conhecidos como as Grundrisse. O pequeno Formações econômicas pré-capitalistas é uma das obras derivadas desse volumoso trabalho, que se desdobraria (principalmente, mas não somente) nos Livros 1 a 3 de O Capital onde Marx iria expor sua teoria e no Livro 4, que seria a reunião de teorias dos outros autores comentados.

					Entre as várias opções de caminhos para expor suas ideias, Marx pensou publicar antes dos outros Livros o que seria o Livro 4 (para expor as falhas dos outros autores e daí mostrar as suas), em unir o conteúdo do Livro 4 ao Livro 1 (mas ficaria então demasiado grande), mas por fim decidiu expor toda sua teoria primeiro para depois mostrar a de outros autores, como forma de satisfazer o público que queria novidades no campo da economia.

					A vontade de escrever um livr\"um todo artístico\" levou a refinar bastante o texto, acrescentando referências, e a excluir doo que seria o capítulo 6 do plano inicial do Livro 1.

					Infelizmente o autor não pôde continuar a cuidar da publicação dos seus livros, muito embora alguns manuscritos não-publicados em resposta aos economistas marginais da época possam ser classificados como parte desta série de livros.[1]
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Capital (em alemão: Das Kapital) é um conjunto de livros (sendo o primeiro de 1867) de Karl Marx que constituem uma análise do capitalismo (crítica da economia política). Muitos consideram esta obra o marco do pensamento socialista marxista. Nela existem muitos conceitos econômicos complexos, como mais valia, capital constante e capital variável, uma análise sobre o salário; ou sobre a acumulação primitiva. Resumindo, sobre todos os aspectos do modo de produção capitalista, incluindo também uma crítica sobre a teoria do valor-trabalho de Adam Smith e de outros assuntos dos economistas clássicos.

					Quem procura sobre a teoria econômica marxista consulta o livro O Capital. Porém como o seu conteúdo é volumoso e abrangente, a subsecção quanto ao conteúdo foi separada por livros, e alguns itens contêm apenas sinopse para as hiperligações que levam aos verbetes como Força de trabalho, Teoria da Abstinência, acumulação primitiva, etc. Ainda, é conveniente consultar a obra anterior que também contém parte do conteúdo que seria aglutinado pelo autor: manuscritos de 1844, Miséria da Filosofia (contém uma tabela comparando a obra econômica de Proudhon com a de Marx), Contribuição para a Crítica da Economia Política, Grundrisse. Há também resumos de O Capital preparado por outros, como a de Carlo Cafiero. Mas o mais recomendado é a leitura integral da obra (assim também recomendaram Cafiero, Julian Borchardt, Roman Rosdolsky, Rosa Luxemburgo, etc). Na empreitada de ler a obra integral muitos acabam desistindo no caminho por ser uma obra densa e difícil.

					Marx levou muito tempo até chegar à sua obra considerada máxima. Em 1844 escreveu os Manuscritos económico-filosóficos de 1844. Cada vez mais preocupado com os problemas económicos, escreveu e publicou Miséria da Filosofia em 1847, uma resposta preocupada com a objectividade dessa ciência (a Economia Política) ao livro Sistema das Contradições Económicas ou Filosofia da Miséria de Proudhon (que questionava a economia mas pelas inquietudes filosóficas do famoso autor anarquista).

					Em 1859 publicou Contribuição para a Crítica da Economia Política, que continha dois capítulos: A mercadoria e A moeda – O capital seria uma continuação desse livro, mas Marx se desentendeu com seu editor.

					Seus textos escritos em cadernos para rascunhar e ordenar o pensamento econômico ficaram conhecidos como as Grundrisse. O pequeno Formações econômicas pré-capitalistas é uma das obras derivadas desse volumoso trabalho, que se desdobraria (principalmente, mas não somente) nos Livros 1 a 3 de O Capital onde Marx iria expor sua teoria e no Livro 4, que seria a reunião de teorias dos outros autores comentados.

					Entre as várias opções de caminhos para expor suas ideias, Marx pensou publicar antes dos outros Livros o que seria o Livro 4 (para expor as falhas dos outros autores e daí mostrar as suas), em unir o conteúdo do Livro 4 ao Livro 1 (mas ficaria então demasiado grande), mas por fim decidiu expor toda sua teoria primeiro para depois mostrar a de outros autores, como forma de satisfazer o público que queria novidades no campo da economia.

					A vontade de escrever um livr\"um todo artístico\" levou a refinar bastante o texto, acrescentando referências, e a excluir doo que seria o capítulo 6 do plano inicial do Livro 1.

					Infelizmente o autor não pôde continuar a cuidar da publicação dos seus livros, muito embora alguns manuscritos não-publicados em resposta aos economistas marginais da época possam ser classificados como parte desta série de livros.[1]
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00000R'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'MARXkarl'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>