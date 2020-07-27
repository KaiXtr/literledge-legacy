<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ENGELSfriedrich'");
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

		<?php $user = 'ENGELSfriedrich'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Friedrich Engels (pronúncia em alemão: [ˈfʁiːdʁɪç ˈʔɛŋl̩s];[1][2] Barmen, 28 de novembro de 1820 — Londres, 5 de agosto de 1895) foi um empresário industrial[3][4] e teórico revolucionário prussiano, nascido na atual Alemanha, que junto com Karl Marx fundou o chamado socialismo científico ou marxismo. Seu pai era dono de uma grande indústria têxtil em Salford, Inglaterra.

			Foi coautor de diversas obras com Marx, sendo que a mais conhecida é o Manifesto Comunista.[5] Também ajudou a publicar, após a morte de Marx, os dois últimos volumes de O Capital, principal obra de seu amigo e colaborador.[6] Engels também organizou as notas de Marx em Teorias sobre a Mais-Valia, que depois publicou como o \"quarto volume\" de O Capital.[7]

			Grande companheiro de Karl Marx, escreveu livros de profunda análise social. Entre dezembro de 1847 a janeiro de 1848, junto com Marx, escreve o Manifesto do Partido Comunista, onde faz uma breve apresentação de uma nova concepção de história, afirmando que:

			“	A história da humanidade é a história da luta de classes.[5]	”
			Engels morreu em Londres, em 5 de agosto de 1895, aos 74 anos de idade e após a cremação suas cinzas foram jogadas em Beachy Head, Eastbourne.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Friedrich_Engels' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Friedrich Engels (pronúncia em alemão: [ˈfʁiːdʁɪç ˈʔɛŋl̩s];[1][2] Barmen, 28 de novembro de 1820 — Londres, 5 de agosto de 1895) foi um empresário industrial[3][4] e teórico revolucionário prussiano, nascido na atual Alemanha, que junto com Karl Marx fundou o chamado socialismo científico ou marxismo. Seu pai era dono de uma grande indústria têxtil em Salford, Inglaterra.

			Foi coautor de diversas obras com Marx, sendo que a mais conhecida é o Manifesto Comunista.[5] Também ajudou a publicar, após a morte de Marx, os dois últimos volumes de O Capital, principal obra de seu amigo e colaborador.[6] Engels também organizou as notas de Marx em Teorias sobre a Mais-Valia, que depois publicou como o \"quarto volume\" de O Capital.[7]

			Grande companheiro de Karl Marx, escreveu livros de profunda análise social. Entre dezembro de 1847 a janeiro de 1848, junto com Marx, escreve o Manifesto do Partido Comunista, onde faz uma breve apresentação de uma nova concepção de história, afirmando que:

			“	A história da humanidade é a história da luta de classes.[5]	”
			Engels morreu em Londres, em 5 de agosto de 1895, aos 74 anos de idade e após a cremação suas cinzas foram jogadas em Beachy Head, Eastbourne.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Friedrich_Engels' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Friedrich Engels (pronúncia em alemão: [ˈfʁiːdʁɪç ˈʔɛŋl̩s];[1][2] Barmen, 28 de novembro de 1820 — Londres, 5 de agosto de 1895) foi um empresário industrial[3][4] e teórico revolucionário prussiano, nascido na atual Alemanha, que junto com Karl Marx fundou o chamado socialismo científico ou marxismo. Seu pai era dono de uma grande indústria têxtil em Salford, Inglaterra.

			Foi coautor de diversas obras com Marx, sendo que a mais conhecida é o Manifesto Comunista.[5] Também ajudou a publicar, após a morte de Marx, os dois últimos volumes de O Capital, principal obra de seu amigo e colaborador.[6] Engels também organizou as notas de Marx em Teorias sobre a Mais-Valia, que depois publicou como o \"quarto volume\" de O Capital.[7]

			Grande companheiro de Karl Marx, escreveu livros de profunda análise social. Entre dezembro de 1847 a janeiro de 1848, junto com Marx, escreve o Manifesto do Partido Comunista, onde faz uma breve apresentação de uma nova concepção de história, afirmando que:

			“	A história da humanidade é a história da luta de classes.[5]	”
			Engels morreu em Londres, em 5 de agosto de 1895, aos 74 anos de idade e após a cremação suas cinzas foram jogadas em Beachy Head, Eastbourne.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Friedrich_Engels' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='ENGELSfriedrich'; include '../design/poemfind.php'; ?>
		<?php $user = 'ENGELSfriedrich'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>