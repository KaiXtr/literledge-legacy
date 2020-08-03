<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ORWELLgeorge'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'];}
				else {$v = $i[$_COOKIE['lang']];}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'ORWELLgeorge'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Eric Arthur Blair (Motihari, Índia Britânica, 25 de junho de 1903 — Camden, Londres, Reino Unido, 21 de janeiro de 1950), mais conhecido pelo pseudónimo <br />
			George Orwell, foi um escritor, jornalista e ensaísta político inglês, nascido na Índia Britânica. Sua obra é marcada por uma inteligência perspicaz e bem-humorada, <br />
			uma consciência profunda das injustiças sociais, uma intensa oposição ao totalitarismo e uma paixão pela clareza da escrita. Apontado como simpatizante <br />
			da proposta anarquista, o escritor faz uma defesa da auto-gestão ou autonomismo. Sua hostilidade ao Stalinismo e pela experiência do socialismo soviético, <br />
			um regime que Orwell denunciou em seu romance satírico A Revolução dos Bichos, se revelou uma característica constante em sua obra. <br />
			<br />
			Considerado talvez o melhor cronista da cultura inglesa do século XX, Orwell dedicou-se a escrever resenhas, ficção, artigos jornalísticos polémicos, <br />
			crítica literária e poesia. Ele é mais conhecido pelo romance distópico Nineteen Eighty-Four, escrito em 1949, e pela novela satírica Animal Farm (1945). <br />
			Juntas, estas obras venderam mais cópias do que os dois livros mais vendidos de qualquer outro escritor do século XX.[10] Um outro livro de sua autoria, <br />
			Homage to Catalonia (1938) - um relato de sua experiência como combatente voluntário no lado republicano da Guerra Civil Espanhola — também é altamente aclamado, <br />
			assim como seus ensaios sobre política, literatura, linguagem e cultura. Em 2008, o The Times classificou-o em segundo lugar em uma lista de <br />
			\"Os 50 maiores escritores britânicos desde 1945\".[11] <br />
			<br />
			A influência de Orwell na cultura contemporânea, tanto popular quanto política, perdura até hoje. Vários neologismos criados por ele, assim como o <br />
			termo orwelliano — palavra usada para definir qualquer prática social autoritária ou totalitária[12] — já fazem parte do vernáculo popular. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/George_Orwell' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Eric Arthur Blair (Motihari, Índia Britânica, 25 de junho de 1903 — Camden, Londres, Reino Unido, 21 de janeiro de 1950), mais conhecido pelo pseudónimo <br />
			George Orwell, foi um escritor, jornalista e ensaísta político inglês, nascido na Índia Britânica. Sua obra é marcada por uma inteligência perspicaz e bem-humorada, <br />
			uma consciência profunda das injustiças sociais, uma intensa oposição ao totalitarismo e uma paixão pela clareza da escrita. Apontado como simpatizante <br />
			da proposta anarquista, o escritor faz uma defesa da auto-gestão ou autonomismo. Sua hostilidade ao Stalinismo e pela experiência do socialismo soviético, <br />
			um regime que Orwell denunciou em seu romance satírico A Revolução dos Bichos, se revelou uma característica constante em sua obra. <br />
			<br />
			Considerado talvez o melhor cronista da cultura inglesa do século XX, Orwell dedicou-se a escrever resenhas, ficção, artigos jornalísticos polémicos, <br />
			crítica literária e poesia. Ele é mais conhecido pelo romance distópico Nineteen Eighty-Four, escrito em 1949, e pela novela satírica Animal Farm (1945). <br />
			Juntas, estas obras venderam mais cópias do que os dois livros mais vendidos de qualquer outro escritor do século XX.[10] Um outro livro de sua autoria, <br />
			Homage to Catalonia (1938) - um relato de sua experiência como combatente voluntário no lado republicano da Guerra Civil Espanhola — também é altamente aclamado, <br />
			assim como seus ensaios sobre política, literatura, linguagem e cultura. Em 2008, o The Times classificou-o em segundo lugar em uma lista de <br />
			\"Os 50 maiores escritores britânicos desde 1945\".[11] <br />
			<br />
			A influência de Orwell na cultura contemporânea, tanto popular quanto política, perdura até hoje. Vários neologismos criados por ele, assim como o <br />
			termo orwelliano — palavra usada para definir qualquer prática social autoritária ou totalitária[12] — já fazem parte do vernáculo popular. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/George_Orwell' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Eric Arthur Blair (Motihari, Índia Britânica, 25 de junho de 1903 — Camden, Londres, Reino Unido, 21 de janeiro de 1950), mais conhecido pelo pseudónimo <br />
			George Orwell, foi um escritor, jornalista e ensaísta político inglês, nascido na Índia Britânica. Sua obra é marcada por uma inteligência perspicaz e bem-humorada, <br />
			uma consciência profunda das injustiças sociais, uma intensa oposição ao totalitarismo e uma paixão pela clareza da escrita. Apontado como simpatizante <br />
			da proposta anarquista, o escritor faz uma defesa da auto-gestão ou autonomismo. Sua hostilidade ao Stalinismo e pela experiência do socialismo soviético, <br />
			um regime que Orwell denunciou em seu romance satírico A Revolução dos Bichos, se revelou uma característica constante em sua obra. <br />
			<br />
			Considerado talvez o melhor cronista da cultura inglesa do século XX, Orwell dedicou-se a escrever resenhas, ficção, artigos jornalísticos polémicos, <br />
			crítica literária e poesia. Ele é mais conhecido pelo romance distópico Nineteen Eighty-Four, escrito em 1949, e pela novela satírica Animal Farm (1945). <br />
			Juntas, estas obras venderam mais cópias do que os dois livros mais vendidos de qualquer outro escritor do século XX.[10] Um outro livro de sua autoria, <br />
			Homage to Catalonia (1938) - um relato de sua experiência como combatente voluntário no lado republicano da Guerra Civil Espanhola — também é altamente aclamado, <br />
			assim como seus ensaios sobre política, literatura, linguagem e cultura. Em 2008, o The Times classificou-o em segundo lugar em uma lista de <br />
			\"Os 50 maiores escritores britânicos desde 1945\".[11] <br />
			<br />
			A influência de Orwell na cultura contemporânea, tanto popular quanto política, perdura até hoje. Vários neologismos criados por ele, assim como o <br />
			termo orwelliano — palavra usada para definir qualquer prática social autoritária ou totalitária[12] — já fazem parte do vernáculo popular. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/George_Orwell' > Wikipedia </a>
			<br />
					";
				}
			?>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/V4s9pdL7tpA?start=141" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='ORWELLgeorge'; include '../design/poemfind.php'; ?>
		<?php $user = 'ORWELLgeorge'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>