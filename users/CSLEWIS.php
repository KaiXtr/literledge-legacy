<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='CSLEWIS'");
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

		<?php $user = 'CSLEWIS'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Clive Staples Lewis, comumente referido como C. S. Lewis (Belfast, 29 de novembro de 1898 — Oxford, 22 de novembro de 1963), foi um professor universitário, <br />
			escritor, romancista, poeta, crítico literário, ensaísta e teólogo irlandês. Durante sua carreira acadêmica, foi professor e membro do Magdalen College, <br />
			tanto da Universidade de Oxford como da Universidade de Cambridge. Ele é mais conhecido por seus trabalhos envolvendo a apologia cristã, incluindo as obras <br />
			O Problema do Sofrimento (1940), Milagres (1947) e Cristianismo Puro e Simples (1952), e a ficção e a fantasia, sendo as obras As Crônicas de Nárnia (1950-56), <br />
			Cartas de um diabo ao seu aprendiz (1942) e Trilogia Espacial (1938-45), exemplos de sua produção literária voltadas para esses temas. Foi também um respeitado <br />
			estudioso da literatura medieval e renascentista, tendo produzido alguns dos mais renomados trabalhos acadêmicos envolvendo esses temas no século XX. <br />
			<br />
			Em vida, foi grande amigo do também professor universitário e escritor britânico J. R. R. Tolkien (1892-1973). Juntos, os dois serviram como membros do corpo docente <br />
			da Faculdade de Língua Inglesa da Universidade de Oxford e lideraram o grupo informal de discussão e colaboração literária The Inklings. Apesar de ter sido criado <br />
			ao longo da infância dentro das tradições da Igreja da Irlanda, se tornou um ateu convicto na altura de sua adolescência, seguindo essa linha de convicção pessoal <br />
			até o início de sua idade adulta, quando, por intermédio de Tolkien, voltou a professar a fé cristã, se tornando um árduo apologista do cristianismo até o fim de <br />
			sua vida e carreira. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Clive_Staples_Lewis' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Clive Staples Lewis, comumente referido como C. S. Lewis (Belfast, 29 de novembro de 1898 — Oxford, 22 de novembro de 1963), foi um professor universitário, <br />
			escritor, romancista, poeta, crítico literário, ensaísta e teólogo irlandês. Durante sua carreira acadêmica, foi professor e membro do Magdalen College, <br />
			tanto da Universidade de Oxford como da Universidade de Cambridge. Ele é mais conhecido por seus trabalhos envolvendo a apologia cristã, incluindo as obras <br />
			O Problema do Sofrimento (1940), Milagres (1947) e Cristianismo Puro e Simples (1952), e a ficção e a fantasia, sendo as obras As Crônicas de Nárnia (1950-56), <br />
			Cartas de um diabo ao seu aprendiz (1942) e Trilogia Espacial (1938-45), exemplos de sua produção literária voltadas para esses temas. Foi também um respeitado <br />
			estudioso da literatura medieval e renascentista, tendo produzido alguns dos mais renomados trabalhos acadêmicos envolvendo esses temas no século XX. <br />
			<br />
			Em vida, foi grande amigo do também professor universitário e escritor britânico J. R. R. Tolkien (1892-1973). Juntos, os dois serviram como membros do corpo docente <br />
			da Faculdade de Língua Inglesa da Universidade de Oxford e lideraram o grupo informal de discussão e colaboração literária The Inklings. Apesar de ter sido criado <br />
			ao longo da infância dentro das tradições da Igreja da Irlanda, se tornou um ateu convicto na altura de sua adolescência, seguindo essa linha de convicção pessoal <br />
			até o início de sua idade adulta, quando, por intermédio de Tolkien, voltou a professar a fé cristã, se tornando um árduo apologista do cristianismo até o fim de <br />
			sua vida e carreira. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Clive_Staples_Lewis' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Clive Staples Lewis, comumente referido como C. S. Lewis (Belfast, 29 de novembro de 1898 — Oxford, 22 de novembro de 1963), foi um professor universitário, <br />
			escritor, romancista, poeta, crítico literário, ensaísta e teólogo irlandês. Durante sua carreira acadêmica, foi professor e membro do Magdalen College, <br />
			tanto da Universidade de Oxford como da Universidade de Cambridge. Ele é mais conhecido por seus trabalhos envolvendo a apologia cristã, incluindo as obras <br />
			O Problema do Sofrimento (1940), Milagres (1947) e Cristianismo Puro e Simples (1952), e a ficção e a fantasia, sendo as obras As Crônicas de Nárnia (1950-56), <br />
			Cartas de um diabo ao seu aprendiz (1942) e Trilogia Espacial (1938-45), exemplos de sua produção literária voltadas para esses temas. Foi também um respeitado <br />
			estudioso da literatura medieval e renascentista, tendo produzido alguns dos mais renomados trabalhos acadêmicos envolvendo esses temas no século XX. <br />
			<br />
			Em vida, foi grande amigo do também professor universitário e escritor britânico J. R. R. Tolkien (1892-1973). Juntos, os dois serviram como membros do corpo docente <br />
			da Faculdade de Língua Inglesa da Universidade de Oxford e lideraram o grupo informal de discussão e colaboração literária The Inklings. Apesar de ter sido criado <br />
			ao longo da infância dentro das tradições da Igreja da Irlanda, se tornou um ateu convicto na altura de sua adolescência, seguindo essa linha de convicção pessoal <br />
			até o início de sua idade adulta, quando, por intermédio de Tolkien, voltou a professar a fé cristã, se tornando um árduo apologista do cristianismo até o fim de <br />
			sua vida e carreira. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Clive_Staples_Lewis' > Wikipedia </a>
			<br />
					";
				}
			?>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/JHxs3gdtV8A?start=141" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='CSLEWIS'; include '../design/poemfind.php'; ?>
		<?php $user = 'CSLEWIS'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>