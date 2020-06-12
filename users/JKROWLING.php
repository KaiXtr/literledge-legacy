<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='JKROWLING'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'JKROWLING'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Joanne "Jo" Rowling, OBE, FRSL, (IPA: [dʒoʊæn_roʊlɪŋ]; Yate, 31 de julho de 1965), mais conhecida como J. K. Rowling, é uma escritora, roteirista e produtora cinematográfica britânica, notória por escrever a série de livros Harry Potter. Os livros ganharam uma popularidade mundial, recebendo múltiplos prêmios e vendendo mais de 500 milhões de cópias.[1] Eles se tornaram a série literária mais vendida da história.[2] A Warner Bros. adaptou os livros para o cinema, fazendo com que os filmes entrassem na lista de filmes de maior bilheteria.[3]

				Nascida em Yate, na Inglaterra, Rowling teve a ideia de escrever a série enquanto estava num trem indo de Manchester para Londres, em 1990.[4] Em um período de sete anos, Rowling vivenciou a morte de sua mãe, o nascimento de sua primeira filha, seu divórcio com seu primeiro marido e uma crise financeira pessoal até que, em 1997, finalizou o primeiro dos sete livros da série, Harry Potter e a Pedra Filosofal e o último, Harry Potter e as Relíquias da Morte, em 2007. Desde então, Rowling já escreveu quatro livros para o público adulto, Morte Súbita (2012) e, sob o pseudônimo de Robert Galbraith, O Chamado do Cuco (2013), seguido por O Bicho-da-Seda (2014), Vocação Para o Mal (2015) e Branco Letal (2018).

				Depois do sucesso de Harry Potter, Rowling se reergueu financeiramente e foi da pobreza a uma riqueza multimilionária em cinco anos. Ela é a autora britânica com o maior número de vendas, chegando a mais de 238 milhões de libras em livros vendidos.[5] A Lista dos Ricos do Jornal Sunday Times de 2016 estimou a fortuna de Rowling em 500 milhões de libras, classificando-a como a 197ª pessoa mais rica do Reino Unido.[6] Em 2007, a revista Time nomeou-a como Pessoa do Ano, ressaltando a inspiração social, moral e política que ela deu a seus fãs.[7] Em outubro de 2010, Rowling foi nomeada a "Mulher Mais Influente da Grã-Bretanha" pelos principais editores de revista[8] e, no mesmo ano, foi classificada como a 40ª pessoa mais poderosa pela revista Forbes.[9] Ela apoia diversas instituições de caridade, tais como a Comic Relief, a One Parent Families, a Multiple Sclerosis Society of Great Britain e a Lumos (criada pela própria).[10]
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/J._K._Rowling' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='JKROWLING'; include '../design/poemfind.php'; ?>
		<?php $user = 'JKROWLING'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>