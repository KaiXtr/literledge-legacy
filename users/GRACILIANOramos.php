<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='GRACILIANOramos'");
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

		<?php $user = 'GRACILIANOramos'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Graciliano Ramos de Oliveira (Quebrangulo, 27 de outubro de 1892 — Rio de Janeiro, 20 de março de 1953) foi um romancista, cronista, contista, jornalista, <br />
			político, militante comunista e memorialista brasileiro do século XX, mais conhecido por sua obra Vidas Secas (1938). <br />
			<br />
			Nascido numa grande família de classe média, viveu os primeiros anos de sua infância migrando para diversas cidades da Região Nordeste do Brasil. <br />
			Trabalhou como jornalista na cidade do Rio de Janeiro, onde escreveu para O Malho e Correio da Manhã, até regressar para o Nordeste em 1915, devido tragédia <br />
			familiar em que perdeu quatro irmãos. Fixou-se na cidade de Palmeira dos Índios, onde casou-se, e em 1927 foi eleito prefeito, cargo que exerceu por dois anos. <br />
			Logo, voltou a escrever e publicou seu primeiro romance, Caetés (1933). Vivendo em Maceió durante a maior parte da década de 1930, trabalhou na Imprensa Oficial e <br />
			publicou São Bernardo (1934). Foi preso na capital alagoana em março de 1936, acusado de ser militante comunista. Esse incidente o inspiraria a publicar duas <br />
			de suas principais obras: Angústia (1936) e o texto \"Baleia\", que daria origem à Vidas Secas em 1938. Já na década de 1940, ingressou no Partido Comunista do Brasil <br />
			ao lado do militar e político Luís Carlos Prestes. Nos anos posteriores realizaria viagens a países europeus, incluindo a União Soviética em 1952. <br />
			Morreu em 20 de março do ano seguinte, aos 60 anos, no Rio de Janeiro. Suas obras póstumas notáveis incluem Memórias do Cárcere, <br />
			a crônica Viagem e o livro de contos Histórias de Alexandre. <br />
			<br />
			Tradutor de obras em inglês e francês e honrado com diversos prêmios em vida, a obra de Graciliano Ramos recebeu riqueza da crítica literária e atenção do <br />
			mundo acadêmico. Seu romance modernista também conhecido como regionalista Vidas Secas é visto como um clássico da literatura brasileira. <br />
			<br />
			Encontra-se colaboração da sua autoria na revista luso-brasileira Atlântico . <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Graciliano_Ramos' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Graciliano Ramos de Oliveira (Quebrangulo, 27 de outubro de 1892 — Rio de Janeiro, 20 de março de 1953) foi um romancista, cronista, contista, jornalista, <br />
			político, militante comunista e memorialista brasileiro do século XX, mais conhecido por sua obra Vidas Secas (1938). <br />
			<br />
			Nascido numa grande família de classe média, viveu os primeiros anos de sua infância migrando para diversas cidades da Região Nordeste do Brasil. <br />
			Trabalhou como jornalista na cidade do Rio de Janeiro, onde escreveu para O Malho e Correio da Manhã, até regressar para o Nordeste em 1915, devido tragédia <br />
			familiar em que perdeu quatro irmãos. Fixou-se na cidade de Palmeira dos Índios, onde casou-se, e em 1927 foi eleito prefeito, cargo que exerceu por dois anos. <br />
			Logo, voltou a escrever e publicou seu primeiro romance, Caetés (1933). Vivendo em Maceió durante a maior parte da década de 1930, trabalhou na Imprensa Oficial e <br />
			publicou São Bernardo (1934). Foi preso na capital alagoana em março de 1936, acusado de ser militante comunista. Esse incidente o inspiraria a publicar duas <br />
			de suas principais obras: Angústia (1936) e o texto \"Baleia\", que daria origem à Vidas Secas em 1938. Já na década de 1940, ingressou no Partido Comunista do Brasil <br />
			ao lado do militar e político Luís Carlos Prestes. Nos anos posteriores realizaria viagens a países europeus, incluindo a União Soviética em 1952. <br />
			Morreu em 20 de março do ano seguinte, aos 60 anos, no Rio de Janeiro. Suas obras póstumas notáveis incluem Memórias do Cárcere, <br />
			a crônica Viagem e o livro de contos Histórias de Alexandre. <br />
			<br />
			Tradutor de obras em inglês e francês e honrado com diversos prêmios em vida, a obra de Graciliano Ramos recebeu riqueza da crítica literária e atenção do <br />
			mundo acadêmico. Seu romance modernista também conhecido como regionalista Vidas Secas é visto como um clássico da literatura brasileira. <br />
			<br />
			Encontra-se colaboração da sua autoria na revista luso-brasileira Atlântico . <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Graciliano_Ramos' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Graciliano Ramos de Oliveira (Quebrangulo, 27 de outubro de 1892 — Rio de Janeiro, 20 de março de 1953) foi um romancista, cronista, contista, jornalista, <br />
			político, militante comunista e memorialista brasileiro do século XX, mais conhecido por sua obra Vidas Secas (1938). <br />
			<br />
			Nascido numa grande família de classe média, viveu os primeiros anos de sua infância migrando para diversas cidades da Região Nordeste do Brasil. <br />
			Trabalhou como jornalista na cidade do Rio de Janeiro, onde escreveu para O Malho e Correio da Manhã, até regressar para o Nordeste em 1915, devido tragédia <br />
			familiar em que perdeu quatro irmãos. Fixou-se na cidade de Palmeira dos Índios, onde casou-se, e em 1927 foi eleito prefeito, cargo que exerceu por dois anos. <br />
			Logo, voltou a escrever e publicou seu primeiro romance, Caetés (1933). Vivendo em Maceió durante a maior parte da década de 1930, trabalhou na Imprensa Oficial e <br />
			publicou São Bernardo (1934). Foi preso na capital alagoana em março de 1936, acusado de ser militante comunista. Esse incidente o inspiraria a publicar duas <br />
			de suas principais obras: Angústia (1936) e o texto \"Baleia\", que daria origem à Vidas Secas em 1938. Já na década de 1940, ingressou no Partido Comunista do Brasil <br />
			ao lado do militar e político Luís Carlos Prestes. Nos anos posteriores realizaria viagens a países europeus, incluindo a União Soviética em 1952. <br />
			Morreu em 20 de março do ano seguinte, aos 60 anos, no Rio de Janeiro. Suas obras póstumas notáveis incluem Memórias do Cárcere, <br />
			a crônica Viagem e o livro de contos Histórias de Alexandre. <br />
			<br />
			Tradutor de obras em inglês e francês e honrado com diversos prêmios em vida, a obra de Graciliano Ramos recebeu riqueza da crítica literária e atenção do <br />
			mundo acadêmico. Seu romance modernista também conhecido como regionalista Vidas Secas é visto como um clássico da literatura brasileira. <br />
			<br />
			Encontra-se colaboração da sua autoria na revista luso-brasileira Atlântico . <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Graciliano_Ramos' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='GRACILIANOramos'; include '../design/poemfind.php'; ?>
		<?php $user = 'GRACILIANOramos'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>