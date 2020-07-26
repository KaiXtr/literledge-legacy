<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000020'");
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
			<?php $book = '000020'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Harry Potter and the Order of the Phoenix (Brasil: Harry Potter e a Ordem da Fênix /Portugal: Harry Potter e a Ordem da Fénix) é o quinto livro dos sete volumes da série de fantasia Harry Potter, tanto em termos cronológicos como em ordem de publicação, da autora inglesa J. K. Rowling. O livro narra as lutas de Harry e seus colegas durante o quinto ano na Escola de Magia e Bruxaria de Hogwarts, que incluem a aparição sub-reptícia do antagonista Lorde Voldemort e a preparação para os NOMs (acrônimo para Níveis Ordinários em Magia, são testes realizados por alunos do quinto ano). Após Harry presenciar o ressurgimento de Voldemort e lutar com ele no ano anterior, o Ministério da Magia e o Profeta Diário iniciam durante as férias de verão uma campanha para desacreditar Harry e Dumbledore perante a comunidade mágica sobre o retorno do bruxo das trevas.

					O livro foi primeiramente publicado no Reino Unido e nos Estados Unidos em junho de 2003, pelas editoras Bloomsbury e Scholastic, respectivamente.[1][2] Em Portugal, a editora Presença foi responsável pelo lançamento do livro em outubro de 2003.[3] No Brasil, o livro foi lançado pela editora Rocco em novembro do mesmo ano.[4] Segundo a autora, o livro é \"muito mais obscuro\" do que os anteriores.[5] O romance, que é o maior livro da série, se tornou na época o livro mais vendido da história com mais de cinco milhões de cópias vendidas nas primeiras 24 horas do lançamento[6] e desde então já vendeu mais de 55 milhões de cópias.[7][8] O volume ganhou diversos prêmios, dentre eles o British Book Awards.

					A adaptação cinematográfica do livro, dirigida por David Yates, foi lançada em 2007 e arrecadou mais de 939 milhões de dólares, assegurando sua entrada na lista de filmes de maior bilheteria.[9] Também foi lançado um jogo eletrônico baseado no filme para diversas plataformas, que recebeu críticas positivas.
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
					Harry Potter and the Order of the Phoenix (Brasil: Harry Potter e a Ordem da Fênix /Portugal: Harry Potter e a Ordem da Fénix) é o quinto livro dos sete volumes da série de fantasia Harry Potter, tanto em termos cronológicos como em ordem de publicação, da autora inglesa J. K. Rowling. O livro narra as lutas de Harry e seus colegas durante o quinto ano na Escola de Magia e Bruxaria de Hogwarts, que incluem a aparição sub-reptícia do antagonista Lorde Voldemort e a preparação para os NOMs (acrônimo para Níveis Ordinários em Magia, são testes realizados por alunos do quinto ano). Após Harry presenciar o ressurgimento de Voldemort e lutar com ele no ano anterior, o Ministério da Magia e o Profeta Diário iniciam durante as férias de verão uma campanha para desacreditar Harry e Dumbledore perante a comunidade mágica sobre o retorno do bruxo das trevas.

					O livro foi primeiramente publicado no Reino Unido e nos Estados Unidos em junho de 2003, pelas editoras Bloomsbury e Scholastic, respectivamente.[1][2] Em Portugal, a editora Presença foi responsável pelo lançamento do livro em outubro de 2003.[3] No Brasil, o livro foi lançado pela editora Rocco em novembro do mesmo ano.[4] Segundo a autora, o livro é \"muito mais obscuro\" do que os anteriores.[5] O romance, que é o maior livro da série, se tornou na época o livro mais vendido da história com mais de cinco milhões de cópias vendidas nas primeiras 24 horas do lançamento[6] e desde então já vendeu mais de 55 milhões de cópias.[7][8] O volume ganhou diversos prêmios, dentre eles o British Book Awards.

					A adaptação cinematográfica do livro, dirigida por David Yates, foi lançada em 2007 e arrecadou mais de 939 milhões de dólares, assegurando sua entrada na lista de filmes de maior bilheteria.[9] Também foi lançado um jogo eletrônico baseado no filme para diversas plataformas, que recebeu críticas positivas.
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
					Harry Potter and the Order of the Phoenix (Brasil: Harry Potter e a Ordem da Fênix /Portugal: Harry Potter e a Ordem da Fénix) é o quinto livro dos sete volumes da série de fantasia Harry Potter, tanto em termos cronológicos como em ordem de publicação, da autora inglesa J. K. Rowling. O livro narra as lutas de Harry e seus colegas durante o quinto ano na Escola de Magia e Bruxaria de Hogwarts, que incluem a aparição sub-reptícia do antagonista Lorde Voldemort e a preparação para os NOMs (acrônimo para Níveis Ordinários em Magia, são testes realizados por alunos do quinto ano). Após Harry presenciar o ressurgimento de Voldemort e lutar com ele no ano anterior, o Ministério da Magia e o Profeta Diário iniciam durante as férias de verão uma campanha para desacreditar Harry e Dumbledore perante a comunidade mágica sobre o retorno do bruxo das trevas.

					O livro foi primeiramente publicado no Reino Unido e nos Estados Unidos em junho de 2003, pelas editoras Bloomsbury e Scholastic, respectivamente.[1][2] Em Portugal, a editora Presença foi responsável pelo lançamento do livro em outubro de 2003.[3] No Brasil, o livro foi lançado pela editora Rocco em novembro do mesmo ano.[4] Segundo a autora, o livro é \"muito mais obscuro\" do que os anteriores.[5] O romance, que é o maior livro da série, se tornou na época o livro mais vendido da história com mais de cinco milhões de cópias vendidas nas primeiras 24 horas do lançamento[6] e desde então já vendeu mais de 55 milhões de cópias.[7][8] O volume ganhou diversos prêmios, dentre eles o British Book Awards.

					A adaptação cinematográfica do livro, dirigida por David Yates, foi lançada em 2007 e arrecadou mais de 939 milhões de dólares, assegurando sua entrada na lista de filmes de maior bilheteria.[9] Também foi lançado um jogo eletrônico baseado no filme para diversas plataformas, que recebeu críticas positivas.
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
			<?php $book = '000020'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'JKROWLING'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>