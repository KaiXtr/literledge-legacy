<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='AMADOjorge'");
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

		<?php $user = 'AMADOjorge'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Jorge Leal Amado de Faria OMC • GOSE • GOIH• CBJM ou apenas Jorge Amado (Itabuna, 10 de agosto de 1912 — Salvador, 6 de agosto de 2001) foi um dos mais famosos e traduzidos escritores brasileiros de todos os tempos. Jorge Amado é o autor mais adaptado do cinema, do teatro e da televisão. Verdadeiros sucessos como Dona Flor e Seus Dois Maridos, Tenda dos Milagres, Tieta do Agreste, Gabriela, Cravo e Canela e Tereza Batista Cansada de Guerra foram criações suas. Sua obra literária – 49 livros, ao todo – também já foi tema de escolas de samba por todo o País. Seus livros foram traduzidos em 80 países, em 49 idiomas, bem como em braille e em fitas gravadas para cegos.

			Integrou os quadros da intelectualidade comunista brasileira desde o final da primeira metade do século XX - ideologia presente em várias obras, como a retratação dos moradores do trapiche baiano em Capitães da Areia, de 1937. Em 1995, já descrente dos resultados práticos do comunismo, deixa o PCB (Partido Comunista Brasileiro), despejando fortes críticas à ideologia comunista.

			Jorge foi superado, em número de vendas, apenas por Paulo Coelho. Mas em seu estilo - o romance ficcional -, não há paralelo no Brasil. Em 1994, a sua obra foi reconhecida com o Prémio Camões.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Jorge_Amado' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Jorge Leal Amado de Faria OMC • GOSE • GOIH• CBJM ou apenas Jorge Amado (Itabuna, 10 de agosto de 1912 — Salvador, 6 de agosto de 2001) foi um dos mais famosos e traduzidos escritores brasileiros de todos os tempos. Jorge Amado é o autor mais adaptado do cinema, do teatro e da televisão. Verdadeiros sucessos como Dona Flor e Seus Dois Maridos, Tenda dos Milagres, Tieta do Agreste, Gabriela, Cravo e Canela e Tereza Batista Cansada de Guerra foram criações suas. Sua obra literária – 49 livros, ao todo – também já foi tema de escolas de samba por todo o País. Seus livros foram traduzidos em 80 países, em 49 idiomas, bem como em braille e em fitas gravadas para cegos.

			Integrou os quadros da intelectualidade comunista brasileira desde o final da primeira metade do século XX - ideologia presente em várias obras, como a retratação dos moradores do trapiche baiano em Capitães da Areia, de 1937. Em 1995, já descrente dos resultados práticos do comunismo, deixa o PCB (Partido Comunista Brasileiro), despejando fortes críticas à ideologia comunista.

			Jorge foi superado, em número de vendas, apenas por Paulo Coelho. Mas em seu estilo - o romance ficcional -, não há paralelo no Brasil. Em 1994, a sua obra foi reconhecida com o Prémio Camões.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Jorge_Amado' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Jorge Leal Amado de Faria OMC • GOSE • GOIH• CBJM ou apenas Jorge Amado (Itabuna, 10 de agosto de 1912 — Salvador, 6 de agosto de 2001) foi um dos mais famosos e traduzidos escritores brasileiros de todos os tempos. Jorge Amado é o autor mais adaptado do cinema, do teatro e da televisão. Verdadeiros sucessos como Dona Flor e Seus Dois Maridos, Tenda dos Milagres, Tieta do Agreste, Gabriela, Cravo e Canela e Tereza Batista Cansada de Guerra foram criações suas. Sua obra literária – 49 livros, ao todo – também já foi tema de escolas de samba por todo o País. Seus livros foram traduzidos em 80 países, em 49 idiomas, bem como em braille e em fitas gravadas para cegos.

			Integrou os quadros da intelectualidade comunista brasileira desde o final da primeira metade do século XX - ideologia presente em várias obras, como a retratação dos moradores do trapiche baiano em Capitães da Areia, de 1937. Em 1995, já descrente dos resultados práticos do comunismo, deixa o PCB (Partido Comunista Brasileiro), despejando fortes críticas à ideologia comunista.

			Jorge foi superado, em número de vendas, apenas por Paulo Coelho. Mas em seu estilo - o romance ficcional -, não há paralelo no Brasil. Em 1994, a sua obra foi reconhecida com o Prémio Camões.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Jorge_Amado' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='AMADOjorge'; include '../design/poemfind.php'; ?>
		<?php $user = 'AMADOjorge'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>