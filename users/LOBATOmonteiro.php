<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='LOBATOmonteiro'");
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

		<?php $user = 'LOBATOmonteiro'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			José Bento Renato Monteiro Lobato[nota 1] (Taubaté, Província de São Paulo, 18 de abril de 1882 – cidade de São Paulo, São Paulo, 4 de julho de 1948)[nota 2] <br />
			foi um escritor, ativista, diretor e produtor brasileiro. <br />
			<br />
			Foi um importante editor de livros inéditos e autor de importantes traduções. Seguido a seu precursor Figueiredo Pimentel (\"Contos da Carochinha\") da <br />
			literatura infantil brasileira, ficou popularmente conhecido pelo conjunto educativo de sua obra de livros infantis, que constitui aproximadamente a metade da <br />
			sua produção literária. A outra metade, consistindo de contos (geralmente sobre temas brasileiros), artigos, críticas, crônicas, prefácios, cartas, livros sobre a <br />
			importância do ferro (Ferro, 1931) e do petróleo (O Escândalo do Petróleo, 1936). Escreveu um único romance, O Presidente Negro, que não alcançou a mesma <br />
			popularidade que suas obras para crianças, que entre as mais famosas destaca-se Reinações de Narizinho (1931), Caçadas de Pedrinho (1933) e O Picapau Amarelo (1939). <br />
			<br />
			Contista, ensaísta e tradutor, Lobato nasceu na cidade de Taubaté, interior de São Paulo, no ano de 1882. Formado em Direito, atuou como promotor público até se <br />
			tornar fazendeiro, após receber herança deixada pelo avô. Diante de um novo estilo de vida, Lobato passou a publicar seus primeiros contos em jornais e revistas, <br />
			sendo que, posteriormente, reuniu uma série deles no livro Urupês, sua obra prima como escritor. Em uma época em que os livros brasileiros eram editados em <br />
			Paris ou Lisboa, Monteiro Lobato tornou-se também editor, passando a editar livros também no Brasil. Com isso, ele implantou uma série de renovações nos <br />
			livros didáticos e infantis. <br />
			<br />
			É bastante conhecido entre as crianças, pois se dedicou a um estilo de escrita com linguagem simples onde realidade e fantasia estão lado a lado. <br />
			Pode-se dizer que ele foi o precursor da literatura infantil no Brasil. Suas personagens mais conhecidas são: Emília, uma boneca de pano com <br />
			sentimento e ideias independentes; Pedrinho, personagem que o autor se identifica quando criança; Visconde de Sabugosa, o sábio sabugo de milho que <br />
			tem atitudes de adulto, Cuca, vilã que aterroriza a todos do sítio, Saci Pererê e outros personagens que fazem parte da famosa obra <br />
			Sítio do Picapau Amarelo, que até hoje é lido por muitas crianças e adultos. Escreveu ainda outras obras infantis, como A Menina do Nariz Arrebitado, <br />
			O Saci, Fábulas do Marquês de Rabicó, Aventuras do Príncipe, Noivado de Narizinho, O Pó de Pirlimpimpim, Emília no País da Gramática, Memórias da Emília, <br />
			O Poço do Visconde, e A Chave do Tamanho. Fora os livros infantis, escreveu outras obras literárias, tais como O Choque das Raças, Urupês, A Barca de Gleyre e <br />
			O Escândalo do Petróleo. Neste último livro, demonstra todo seu nacionalismo, posicionando-se totalmente favorável a exploração do petróleo, no Brasil, <br />
			apenas por empresas brasileiras. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Monteiro_Lobato' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			José Bento Renato Monteiro Lobato[nota 1] (Taubaté, Província de São Paulo, 18 de abril de 1882 – cidade de São Paulo, São Paulo, 4 de julho de 1948)[nota 2] <br />
			foi um escritor, ativista, diretor e produtor brasileiro. <br />
			<br />
			Foi um importante editor de livros inéditos e autor de importantes traduções. Seguido a seu precursor Figueiredo Pimentel (\"Contos da Carochinha\") da <br />
			literatura infantil brasileira, ficou popularmente conhecido pelo conjunto educativo de sua obra de livros infantis, que constitui aproximadamente a metade da <br />
			sua produção literária. A outra metade, consistindo de contos (geralmente sobre temas brasileiros), artigos, críticas, crônicas, prefácios, cartas, livros sobre a <br />
			importância do ferro (Ferro, 1931) e do petróleo (O Escândalo do Petróleo, 1936). Escreveu um único romance, O Presidente Negro, que não alcançou a mesma <br />
			popularidade que suas obras para crianças, que entre as mais famosas destaca-se Reinações de Narizinho (1931), Caçadas de Pedrinho (1933) e O Picapau Amarelo (1939). <br />
			<br />
			Contista, ensaísta e tradutor, Lobato nasceu na cidade de Taubaté, interior de São Paulo, no ano de 1882. Formado em Direito, atuou como promotor público até se <br />
			tornar fazendeiro, após receber herança deixada pelo avô. Diante de um novo estilo de vida, Lobato passou a publicar seus primeiros contos em jornais e revistas, <br />
			sendo que, posteriormente, reuniu uma série deles no livro Urupês, sua obra prima como escritor. Em uma época em que os livros brasileiros eram editados em <br />
			Paris ou Lisboa, Monteiro Lobato tornou-se também editor, passando a editar livros também no Brasil. Com isso, ele implantou uma série de renovações nos <br />
			livros didáticos e infantis. <br />
			<br />
			É bastante conhecido entre as crianças, pois se dedicou a um estilo de escrita com linguagem simples onde realidade e fantasia estão lado a lado. <br />
			Pode-se dizer que ele foi o precursor da literatura infantil no Brasil. Suas personagens mais conhecidas são: Emília, uma boneca de pano com <br />
			sentimento e ideias independentes; Pedrinho, personagem que o autor se identifica quando criança; Visconde de Sabugosa, o sábio sabugo de milho que <br />
			tem atitudes de adulto, Cuca, vilã que aterroriza a todos do sítio, Saci Pererê e outros personagens que fazem parte da famosa obra <br />
			Sítio do Picapau Amarelo, que até hoje é lido por muitas crianças e adultos. Escreveu ainda outras obras infantis, como A Menina do Nariz Arrebitado, <br />
			O Saci, Fábulas do Marquês de Rabicó, Aventuras do Príncipe, Noivado de Narizinho, O Pó de Pirlimpimpim, Emília no País da Gramática, Memórias da Emília, <br />
			O Poço do Visconde, e A Chave do Tamanho. Fora os livros infantis, escreveu outras obras literárias, tais como O Choque das Raças, Urupês, A Barca de Gleyre e <br />
			O Escândalo do Petróleo. Neste último livro, demonstra todo seu nacionalismo, posicionando-se totalmente favorável a exploração do petróleo, no Brasil, <br />
			apenas por empresas brasileiras. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Monteiro_Lobato' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			José Bento Renato Monteiro Lobato[nota 1] (Taubaté, Província de São Paulo, 18 de abril de 1882 – cidade de São Paulo, São Paulo, 4 de julho de 1948)[nota 2] <br />
			foi um escritor, ativista, diretor e produtor brasileiro. <br />
			<br />
			Foi um importante editor de livros inéditos e autor de importantes traduções. Seguido a seu precursor Figueiredo Pimentel (\"Contos da Carochinha\") da <br />
			literatura infantil brasileira, ficou popularmente conhecido pelo conjunto educativo de sua obra de livros infantis, que constitui aproximadamente a metade da <br />
			sua produção literária. A outra metade, consistindo de contos (geralmente sobre temas brasileiros), artigos, críticas, crônicas, prefácios, cartas, livros sobre a <br />
			importância do ferro (Ferro, 1931) e do petróleo (O Escândalo do Petróleo, 1936). Escreveu um único romance, O Presidente Negro, que não alcançou a mesma <br />
			popularidade que suas obras para crianças, que entre as mais famosas destaca-se Reinações de Narizinho (1931), Caçadas de Pedrinho (1933) e O Picapau Amarelo (1939). <br />
			<br />
			Contista, ensaísta e tradutor, Lobato nasceu na cidade de Taubaté, interior de São Paulo, no ano de 1882. Formado em Direito, atuou como promotor público até se <br />
			tornar fazendeiro, após receber herança deixada pelo avô. Diante de um novo estilo de vida, Lobato passou a publicar seus primeiros contos em jornais e revistas, <br />
			sendo que, posteriormente, reuniu uma série deles no livro Urupês, sua obra prima como escritor. Em uma época em que os livros brasileiros eram editados em <br />
			Paris ou Lisboa, Monteiro Lobato tornou-se também editor, passando a editar livros também no Brasil. Com isso, ele implantou uma série de renovações nos <br />
			livros didáticos e infantis. <br />
			<br />
			É bastante conhecido entre as crianças, pois se dedicou a um estilo de escrita com linguagem simples onde realidade e fantasia estão lado a lado. <br />
			Pode-se dizer que ele foi o precursor da literatura infantil no Brasil. Suas personagens mais conhecidas são: Emília, uma boneca de pano com <br />
			sentimento e ideias independentes; Pedrinho, personagem que o autor se identifica quando criança; Visconde de Sabugosa, o sábio sabugo de milho que <br />
			tem atitudes de adulto, Cuca, vilã que aterroriza a todos do sítio, Saci Pererê e outros personagens que fazem parte da famosa obra <br />
			Sítio do Picapau Amarelo, que até hoje é lido por muitas crianças e adultos. Escreveu ainda outras obras infantis, como A Menina do Nariz Arrebitado, <br />
			O Saci, Fábulas do Marquês de Rabicó, Aventuras do Príncipe, Noivado de Narizinho, O Pó de Pirlimpimpim, Emília no País da Gramática, Memórias da Emília, <br />
			O Poço do Visconde, e A Chave do Tamanho. Fora os livros infantis, escreveu outras obras literárias, tais como O Choque das Raças, Urupês, A Barca de Gleyre e <br />
			O Escândalo do Petróleo. Neste último livro, demonstra todo seu nacionalismo, posicionando-se totalmente favorável a exploração do petróleo, no Brasil, <br />
			apenas por empresas brasileiras. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Monteiro_Lobato' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='LOBATOmonteiro'; include '../design/poemfind.php'; ?>
		<?php $user = 'LOBATOmonteiro'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>