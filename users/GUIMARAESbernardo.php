<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='GUIMARAESbernardo'");
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

		<?php $user = 'GUIMARAESbernardo'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Bernardo Joaquim da Silva Guimarães (Ouro Preto, 15 de agosto de 1825 — Ouro Preto, 10 de março de 1884) foi um romancista e poeta brasileiro, <br />
			conhecido pelo romance A Escrava Isaura, sendo o patrono da Cadeira nº 5 da Academia Brasileira de Letras.  <br />
			<br />
			Filho de João Joaquim da Silva Guimarães, também poeta, e de Constança Beatriz de Oliveira Guimarães. Casou-se com Teresa Maria Gomes de Lima Guimarães,  <br />
			e tiveram oito filhos: João Nabor (1868-1873), Horácio (1870-1959), Constança (1871-1888), Isabel (1873-1915), Affonso (1876-1955), também escritor,  <br />
			autor de Os Borrachos e Ossa Mea, sob o nome de Silva Guimarães, José (1882-1919), Bernardo (1832-1955) e Pedro (1884-1948). <br />
			<br />
			Formou-se na 20ª turma da Faculdade de Direito de São Paulo, em 1851, colando grau em 15 de março de 1852, e nesta cidade tornou-se amigo dos poetas  <br />
			Álvares de Azevedo (1831-1852) e Aureliano Lessa (1828-1861). Os três e outros estudantes fundaram a Sociedade Epicureia. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Bernardo_Guimarães' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Bernardo Joaquim da Silva Guimarães (Ouro Preto, 15 de agosto de 1825 — Ouro Preto, 10 de março de 1884) foi um romancista e poeta brasileiro, <br />
			conhecido pelo romance A Escrava Isaura, sendo o patrono da Cadeira nº 5 da Academia Brasileira de Letras.  <br />
			<br />
			Filho de João Joaquim da Silva Guimarães, também poeta, e de Constança Beatriz de Oliveira Guimarães. Casou-se com Teresa Maria Gomes de Lima Guimarães,  <br />
			e tiveram oito filhos: João Nabor (1868-1873), Horácio (1870-1959), Constança (1871-1888), Isabel (1873-1915), Affonso (1876-1955), também escritor,  <br />
			autor de Os Borrachos e Ossa Mea, sob o nome de Silva Guimarães, José (1882-1919), Bernardo (1832-1955) e Pedro (1884-1948). <br />
			<br />
			Formou-se na 20ª turma da Faculdade de Direito de São Paulo, em 1851, colando grau em 15 de março de 1852, e nesta cidade tornou-se amigo dos poetas  <br />
			Álvares de Azevedo (1831-1852) e Aureliano Lessa (1828-1861). Os três e outros estudantes fundaram a Sociedade Epicureia. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Bernardo_Guimarães' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Bernardo Joaquim da Silva Guimarães (Ouro Preto, 15 de agosto de 1825 — Ouro Preto, 10 de março de 1884) foi um romancista e poeta brasileiro, <br />
			conhecido pelo romance A Escrava Isaura, sendo o patrono da Cadeira nº 5 da Academia Brasileira de Letras.  <br />
			<br />
			Filho de João Joaquim da Silva Guimarães, também poeta, e de Constança Beatriz de Oliveira Guimarães. Casou-se com Teresa Maria Gomes de Lima Guimarães,  <br />
			e tiveram oito filhos: João Nabor (1868-1873), Horácio (1870-1959), Constança (1871-1888), Isabel (1873-1915), Affonso (1876-1955), também escritor,  <br />
			autor de Os Borrachos e Ossa Mea, sob o nome de Silva Guimarães, José (1882-1919), Bernardo (1832-1955) e Pedro (1884-1948). <br />
			<br />
			Formou-se na 20ª turma da Faculdade de Direito de São Paulo, em 1851, colando grau em 15 de março de 1852, e nesta cidade tornou-se amigo dos poetas  <br />
			Álvares de Azevedo (1831-1852) e Aureliano Lessa (1828-1861). Os três e outros estudantes fundaram a Sociedade Epicureia. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Bernardo_Guimarães' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='GUIMARAESbernardo'; include '../design/poemfind.php'; ?>
		<?php $user = 'GUIMARAESbernardo'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>